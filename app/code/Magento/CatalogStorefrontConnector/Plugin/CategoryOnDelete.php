<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\CatalogStorefrontConnector\Plugin;

use Magento\Catalog\Model\ResourceModel\Category as CategoryResource;
use Magento\Framework\Model\AbstractModel;
use Magento\Store\Model\Store;

/**
 * Listen on the event "delete category"
 */
class CategoryOnDelete
{
    /**
     * @var CategoryUpdatesPublisher
     */
    private $categoryPublisher;

    /**
     * @param CategoryUpdatesPublisher $categoryPublisher
     */
    public function __construct(
        CategoryUpdatesPublisher $categoryPublisher
    ) {
        $this->categoryPublisher = $categoryPublisher;
    }

    /**
     * Collect store ID and Category IDs for updated entity
     *
     * @param CategoryResource $subject
     * @param CategoryResource $result
     * @param AbstractModel $category
     * @return CategoryResource
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function afterDelete(
        CategoryResource $subject,
        CategoryResource $result,
        AbstractModel $category
    ): CategoryResource {
        $categoryId = (string)$category->getId();
        foreach ($category->getStoreIds() as $storeId) {
            $storeId = (int)$storeId;
            if ($storeId === Store::DEFAULT_STORE_ID) {
                continue ;
            }
            // we need to collect parent ids to update children field for parent category
            // phpcs:ignore Magento2.Performance.ForeachArrayMerge
            $categoryIds = array_merge([$categoryId], $category->getParentIds());
            $this->categoryPublisher->publish($categoryIds, $storeId);
        }

        return $result;
    }
}
