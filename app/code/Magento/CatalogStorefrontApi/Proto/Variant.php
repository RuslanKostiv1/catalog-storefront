<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: catalog.proto

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\CatalogStorefrontApi\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>magento.catalogStorefrontApi.proto.Variant</code>
 *
 * phpcs:disable
 */
class Variant extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string product = 1;</code>
     */
    protected $product = '';
    /**
     * Generated from protobuf field <code>repeated .magento.catalogStorefrontApi.proto.VariantAttribute attributes = 2;</code>
     */
    private $attributes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $product
     *     @type \Magento\CatalogStorefrontApi\Proto\VariantAttribute[]|\Google\Protobuf\Internal\RepeatedField $attributes
     * }
     */
    public function __construct($data = null)
    {
        \Magento\CatalogStorefrontApi\Metadata\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string product = 1;</code>
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Generated from protobuf field <code>string product = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProduct($var)
    {
        GPBUtil::checkString($var, true);
        $this->product = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .magento.catalogStorefrontApi.proto.VariantAttribute attributes = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Generated from protobuf field <code>repeated .magento.catalogStorefrontApi.proto.VariantAttribute attributes = 2;</code>
     * @param \Magento\CatalogStorefrontApi\Proto\VariantAttribute[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Magento\CatalogStorefrontApi\Proto\VariantAttribute::class);
        $this->attributes = $arr;

        return $this;
    }
}