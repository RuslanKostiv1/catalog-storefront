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
 * Generated from protobuf message <code>magento.catalogStorefrontApi.proto.ImportProductsRequest</code>
 *
 * phpcs:disable
 */
class ImportProductsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .magento.catalogStorefrontApi.proto.Product products = 1;</code>
     */
    private $products;
    /**
     * Store code or id
     *
     * Generated from protobuf field <code>string store = 2;</code>
     */
    protected $store = '';
    /**
     * A map of request parameters
     * Could be useful to identify customer group or any other request-specific data
     *
     * Generated from protobuf field <code>.magento.catalogStorefrontApi.proto.KeyValue params = 6;</code>
     */
    protected $params = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Magento\CatalogStorefrontApi\Proto\Product[]|\Google\Protobuf\Internal\RepeatedField $products
     *     @type string $store
     *           Store code or id
     *     @type \Magento\CatalogStorefrontApi\Proto\KeyValue $params
     *           A map of request parameters
     *           Could be useful to identify customer group or any other request-specific data
     * }
     */
    public function __construct($data = null)
    {
        \Magento\CatalogStorefrontApi\Metadata\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .magento.catalogStorefrontApi.proto.Product products = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Generated from protobuf field <code>repeated .magento.catalogStorefrontApi.proto.Product products = 1;</code>
     * @param \Magento\CatalogStorefrontApi\Proto\Product[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProducts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Magento\CatalogStorefrontApi\Proto\Product::class);
        $this->products = $arr;

        return $this;
    }

    /**
     * Store code or id
     *
     * Generated from protobuf field <code>string store = 2;</code>
     * @return string
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * Store code or id
     *
     * Generated from protobuf field <code>string store = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStore($var)
    {
        GPBUtil::checkString($var, true);
        $this->store = $var;

        return $this;
    }

    /**
     * A map of request parameters
     * Could be useful to identify customer group or any other request-specific data
     *
     * Generated from protobuf field <code>.magento.catalogStorefrontApi.proto.KeyValue params = 6;</code>
     * @return \Magento\CatalogStorefrontApi\Proto\KeyValue
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * A map of request parameters
     * Could be useful to identify customer group or any other request-specific data
     *
     * Generated from protobuf field <code>.magento.catalogStorefrontApi.proto.KeyValue params = 6;</code>
     * @param \Magento\CatalogStorefrontApi\Proto\KeyValue $var
     * @return $this
     */
    public function setParams($var)
    {
        GPBUtil::checkMessage($var, \Magento\CatalogStorefrontApi\Proto\KeyValue::class);
        $this->params = $var;

        return $this;
    }
}
