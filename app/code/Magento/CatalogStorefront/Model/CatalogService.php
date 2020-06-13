<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\CatalogStorefront\Model;

use Magento\CatalogStorefrontApi\Api\CatalogServerInterface;
use Magento\CatalogStorefrontApi\Api\Data\Breadcrumb;
use Magento\CatalogStorefrontApi\Api\Data\CategoriesGetResponseInterface;
use Magento\CatalogStorefrontApi\Api\Data\Category;
use Magento\CatalogStorefrontApi\Api\Data\CategoryInterface;
use Magento\CatalogStorefrontApi\Api\Data\Image;
use Magento\CatalogStorefrontApi\Api\Data\MediaGalleryItem;
use Magento\CatalogStorefrontApi\Api\Data\MediaGalleryItemInterface;
use Magento\CatalogStorefrontApi\Api\Data\ProductInterface;
use Magento\CatalogStorefrontApi\Api\Data\ProductsGetRequestInterface;
use Magento\CatalogStorefrontApi\Api\Data\ImportProductsRequestInterface;
use Magento\CatalogStorefrontApi\Api\Data\ProductsGetResult;
use Magento\CatalogStorefrontApi\Api\Data\ProductsGetResultInterface;
use Magento\CatalogStorefrontApi\Api\Data\ImportProductsResponseInterface;
use Magento\CatalogStorefront\DataProvider\ProductDataProvider;
use Magento\CatalogStorefrontApi\Api\Data\CategoriesGetResponse;
use Magento\CatalogStorefrontApi\Api\Data\Video;
use Magento\Framework\Api\DataObjectHelper;
use Magento\CatalogStorefrontApi\Api\Data\CategoriesGetRequestInterface;
use Magento\CatalogStorefront\DataProvider\CategoryDataProvider;
use Magento\CatalogStorefrontApi\Api\Data\ImportCategoriesRequestInterface;
use Magento\CatalogStorefrontApi\Api\Data\ImportCategoriesResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class for retrieving catalog data
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class CatalogService implements CatalogServerInterface
{
    /**
     * @var ProductDataProvider
     */
    private $dataProvider;

    /**
     * @var DataObjectHelper
     */
    private $dataObjectHelper;

    /**
     * @var CategoryDataProvider
     */
    private $categoryDataProvider;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @param ProductDataProvider $dataProvider
     * @param DataObjectHelper $dataObjectHelper
     * @param CategoryDataProvider $categoryDataProvider
     * @param LoggerInterface $logger
     */
    public function __construct(
        ProductDataProvider $dataProvider,
        DataObjectHelper $dataObjectHelper,
        CategoryDataProvider $categoryDataProvider,
        LoggerInterface $logger
    ) {
        $this->dataProvider = $dataProvider;
        $this->dataObjectHelper = $dataObjectHelper;
        $this->categoryDataProvider = $categoryDataProvider;
        $this->logger = $logger;
    }

    /**
     * Get requested products
     *
     * @param ProductsGetRequestInterface $request
     * @return ProductsGetResultInterface
     * @throws \Magento\Framework\Exception\FileSystemException
     * @throws \Magento\Framework\Exception\RuntimeException
     * @throws \Throwable
     */
    public function getProducts(
        ProductsGetRequestInterface $request
    ): ProductsGetResultInterface {
        $result = new ProductsGetResult();

        if (empty($request->getStore()) || $request->getStore() === null) {
            $this->logger->error(
                __('Store id is not present in Search Criteria. Please add missing info.')
            );
            return $result;
        }
        $products = [];
        if (empty($request->getIds())) {
            return $result;
        }

        $rawItems = $this->dataProvider->fetch(
            $request->getIds(),
            $request->getAttributeCodes(),
            ['store' => $request->getStore()]
        );

        if (count($rawItems) !== count($request->getIds())) {
            $this->logger->error(
                __(
                    'Products with the following ids are not found in catalog: %1',
                    implode(', ', array_diff($request->getIds(), array_keys($rawItems)))
                )
            );
            return $result;
        }

        foreach ($rawItems as $item) {
            $products[] = $this->prepareProduct($item);
        }

        $result->setItems($products);

        return $result;
    }

    /**
     * Unset null values in provided array recursively
     *
     * @param array $array
     * @return array
     */
    private function cleanUpNullValues(array $array): array
    {
        $result = [];
        foreach ($array as $key => $value) {
            if ($value === null || $value === '') {
                continue;
            }

            $result[$key] = is_array($value) ? $this->cleanUpNullValues($value) : $value;
        }
        return $result;
    }

    /**
     * Set product image
     *
     * @param string $key
     * @param array $rawData
     * @param ProductInterface $product
     * @return ProductInterface
     */
    private function setImage(string $key, array $rawData, ProductInterface $product): ProductInterface
    {
        if (empty($rawData[$key])) {
            return $product;
        }

        $image = new Image();
        $image->setUrl($rawData[$key]['url'] ?? '');
        $image->setLabel($rawData[$key]['label'] ?? '');
        $parts = explode('_', $key);
        $parts = array_map("ucfirst", $parts);
        $methodName = 'set' . implode('', $parts);

        $product->$methodName($image);
        return $product;
    }

    /**
     * Import requested products
     *
     * @param ImportProductsRequestInterface $request
     * @return ImportProductsResponseInterface
     * phpcs:disable Generic.CodeAnalysis.EmptyStatement
     */
    public function importProducts(
        ImportProductsRequestInterface $request
    ): ImportProductsResponseInterface {
        // TODO: Implement ImportProducts() method.

        return $request;
    }

    /**
     * Import requested categories
     *
     * @param ImportCategoriesRequestInterface $request
     * @return ImportCategoriesResponseInterface
     * phpcs:disable Generic.CodeAnalysis.EmptyStatement
     */
    public function importCategories(ImportCategoriesRequestInterface $request): ImportCategoriesResponseInterface
    {
        // TODO: Implement ImportCategories() method.

        return $request;
    }

    /**
     * Get requested categories
     *
     * @param CategoriesGetRequestInterface $request
     * @return CategoriesGetResponseInterface
     * @throws \Magento\Framework\Exception\FileSystemException
     * @throws \Magento\Framework\Exception\RuntimeException
     * @throws \Throwable
     */
    public function getCategories(
        CategoriesGetRequestInterface $request
    ): CategoriesGetResponseInterface {
        $result = new CategoriesGetResponse();

        $categories = $this->categoryDataProvider->fetch(
            $request->getIds(),
            \array_merge($request->getAttributeCodes(), ['is_active']),
            ['store' => $request->getStore()]
        );

        $items = [];
        foreach ($categories as $category) {
            $item = new Category();
            $category = $this->cleanUpNullValues($category);
            $category = $this->convertKeyToString('image', $category);
            $category = $this->convertKeyToString('canonical_url', $category);
            $category = $this->convertKeyToString('description', $category);

            $this->dataObjectHelper->populateWithArray($item, $category, CategoryInterface::class);

            $breadcrumbsData = $category['breadcrumbs'] ?? [];
            if ($breadcrumbsData) {
                $breadcrumbs = [];
                foreach ($breadcrumbsData as $breadcrumbData) {
                    $breadcrumb = new Breadcrumb();
                    $breadcrumb->setCategoryId($breadcrumbData['category_id']);
                    $breadcrumb->setCategoryLevel((int)$breadcrumbData['category_level']);
                    $breadcrumb->setCategoryName($breadcrumbData['category_name']);
                    $breadcrumb->setCategoryUrlKey($breadcrumbData['category_url_key']);
                    $breadcrumb->setCategoryUrlPath($breadcrumbData['category_url_path']);
                    $breadcrumbs[] = $breadcrumb;
                }
            }
            $categories = [];
            foreach ($category['children'] ?? [] as $categoryId) {
                $categories[$categoryId] = $categoryId;
            }
            $item->setChildren($categories);
            $items[] = $item;
        }
        $result->setItems($items);
        return $result;
    }

    /**
     * Converts value of array to string type for provided key
     *
     * @param string $key
     * @param array $data
     * @return array
     */
    private function convertKeyToString(string $key, array $data): array
    {
        if (!array_key_exists($key, $data)) {
            return $data;
        }

        if (!is_string($data[$key])) {
            $data[$key] = '';
        }
        return $data;
    }

    /**
     * Get video content for media gallery
     *
     * @param array $mediaGalleryItemVideo
     * @return Video
     */
    private function getMediaGalleryVideo(array $mediaGalleryItemVideo): Video
    {
        $videoContent = new Video;
        $videoContent->setMediaType($mediaGalleryItemVideo['media_type'] ?? '');
        $videoContent->setVideoDescription(
            $mediaGalleryItemVideo['video_description'] ?? ''
        );
        $videoContent->setVideoMetadata(
            $mediaGalleryItemVideo['video_metadata'] ?? ''
        );
        $videoContent->setVideoProvider(
            $mediaGalleryItemVideo['video_provider'] ?? ''
        );
        $videoContent->setVideoTitle(
            $mediaGalleryItemVideo['video_title'] ?? ''
        );
        $videoContent->setVideoUrl(
            $mediaGalleryItemVideo['video_url'] ?? ''
        );

        return $videoContent;
    }

    /**
     * Prepare product from raw data
     *
     * @param array $item
     * @return ProductInterface
     */
    private function prepareProduct(array $item): ProductInterface
    {
        $item = $this->cleanUpNullValues($item);
        $variants = [];
        foreach ($item['variants'] ?? [] as $productId => $variantData) {
            $variant = [
                'product' => $productId,
                'attributes' => $variantData['attributes']
            ];
            $variants[] = $variant;
        }
        $item['variants'] = $variants;

        $item['description'] = $item['description']['html'] ?? '';
        $item['short_description'] = $item['short_description']['html'] ?? '';
        //Convert option values to unified array format
        if (!empty($item['options'])) {
            foreach ($item['options'] as &$option) {
                $firstValue = reset($option['value']);
                if (!is_array($firstValue)) {
                    $option['value'] = [0 => $option['value']];
                    continue;
                }
            }
        }

        $product = new \Magento\CatalogStorefrontApi\Api\Data\Product();
        $this->dataObjectHelper->populateWithArray($product, $item, ProductInterface::class);
        $product = $this->setImage('image', $item, $product);
        $product = $this->setImage('small_image', $item, $product);
        $product = $this->setImage('thumbnail', $item, $product);

        //PopulateWithArray doesn't work with non-array sub-objects which don't set properties using constructor
        $mediaGalleryData = $item['media_gallery'] ?? [];
        $mediaGallery = [];
        foreach ($mediaGalleryData as $mediaGalleryDataItem) {
            $mediaGalleryItem = new MediaGalleryItem;
            $this->dataObjectHelper->populateWithArray(
                $mediaGalleryItem,
                $mediaGalleryDataItem,
                MediaGalleryItemInterface::class
            );
            if (!empty($mediaGalleryDataItem['video_content'])) {
                $videoContent = $this->getMediaGalleryVideo($mediaGalleryDataItem['video_content']);
                $mediaGalleryItem->setVideoContent($videoContent);
            }

            $mediaGallery[] = $mediaGalleryItem;
        }
        $product->setMediaGallery($mediaGallery);

        $urlRewritesData = $item['url_rewrites'] ?? [];
        $urlRewrites = [];
        foreach ($urlRewritesData as $urlRewriteData) {
            $rewrite = new \Magento\CatalogStorefrontApi\Api\Data\UrlRewrite;
            $rewrite->setUrl($urlRewriteData['url'] ?? '');
            $parameters = [];
            foreach ($urlRewriteData['parameters'] ?? [] as $parameterData) {
                $parameter = new \Magento\CatalogStorefrontApi\Api\Data\UrlRewriteParameter;
                $parameter->setName($parameterData['name'] ?? '');
                $parameter->setValue($parameterData['value'] ?? '');
                $parameters[] = $parameter;
            }
            $rewrite->setParameters($parameters);
            $urlRewrites[] = $rewrite;
        }
        $product->setUrlRewrites($urlRewrites);

        return $product;
    }
}