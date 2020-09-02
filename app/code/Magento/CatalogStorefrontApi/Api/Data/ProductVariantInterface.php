<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

/**
 * Autogenerated description for ProductVariant interface
 *
 * @SuppressWarnings(PHPMD.BooleanGetMethodName)
 */
interface ProductVariantInterface
{
    /**
     * Autogenerated description for getId() interface method
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Autogenerated description for setId() interface method
     *
     * @param string $value
     * @return void
     */
    public function setId(string $value): void;

    /**
     * Autogenerated description for getOptionValueId() interface method
     *
     * @return string[]
     */
    public function getOptionValueId(): array;

    /**
     * Autogenerated description for setOptionValueId() interface method
     *
     * @param string[] $value
     * @return void
     */
    public function setOptionValueId(array $value): void;

    /**
     * Autogenerated description for getPrice() interface method
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\PriceInterface[]
     */
    public function getPrice(): array;

    /**
     * Autogenerated description for setPrice() interface method
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\PriceInterface[] $value
     * @return void
     */
    public function setPrice(array $value): void;
}