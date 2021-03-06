<?php
# Generated by the protocol buffer compiler (spiral/php-grpc). DO NOT EDIT!
# source: catalog.proto

namespace Magento\CatalogStorefrontApi\Proto;

use Spiral\GRPC;

interface CatalogInterface extends GRPC\ServiceInterface
{
    // GRPC specific service name.
    public const NAME = "magento.catalogStorefrontApi.proto.Catalog";

    /**
    * @param GRPC\ContextInterface $ctx
    * @param ProductsGetRequest $in
    * @return ProductsGetResult
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function getProducts(GRPC\ContextInterface $ctx, ProductsGetRequest $in): ProductsGetResult;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param ImportProductsRequest $in
    * @return ImportProductsResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function importProducts(GRPC\ContextInterface $ctx, ImportProductsRequest $in): ImportProductsResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param DeleteProductsRequest $in
    * @return DeleteProductsResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function deleteProducts(GRPC\ContextInterface $ctx, DeleteProductsRequest $in): DeleteProductsResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param DeleteCategoriesRequest $in
    * @return DeleteCategoriesResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function deleteCategories(GRPC\ContextInterface $ctx, DeleteCategoriesRequest $in): DeleteCategoriesResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param ImportCategoriesRequest $in
    * @return ImportCategoriesResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function importCategories(GRPC\ContextInterface $ctx, ImportCategoriesRequest $in): ImportCategoriesResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param CategoriesGetRequest $in
    * @return CategoriesGetResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function getCategories(GRPC\ContextInterface $ctx, CategoriesGetRequest $in): CategoriesGetResponse;
}
