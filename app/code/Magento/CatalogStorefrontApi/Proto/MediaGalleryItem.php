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
 * Generated from protobuf message <code>magento.catalogStorefrontApi.proto.MediaGalleryItem</code>
 *
 * phpcs:disable
 */
class MediaGalleryItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string url = 1;</code>
     */
    protected $url = '';
    /**
     * Generated from protobuf field <code>string label = 2;</code>
     */
    protected $label = '';
    /**
     * Generated from protobuf field <code>string media_type = 3;</code>
     */
    protected $media_type = '';
    /**
     * Generated from protobuf field <code>int32 position = 4;</code>
     */
    protected $position = 0;
    /**
     * Generated from protobuf field <code>.magento.catalogStorefrontApi.proto.Video video_content = 5;</code>
     */
    protected $video_content = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $url
     *     @type string $label
     *     @type string $media_type
     *     @type int $position
     *     @type \Magento\CatalogStorefrontApi\Proto\Video $video_content
     * }
     */
    public function __construct($data = null)
    {
        \Magento\CatalogStorefrontApi\Metadata\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string url = 1;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Generated from protobuf field <code>string url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, true);
        $this->url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string label = 2;</code>
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Generated from protobuf field <code>string label = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkString($var, true);
        $this->label = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string media_type = 3;</code>
     * @return string
     */
    public function getMediaType()
    {
        return $this->media_type;
    }

    /**
     * Generated from protobuf field <code>string media_type = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMediaType($var)
    {
        GPBUtil::checkString($var, true);
        $this->media_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 position = 4;</code>
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Generated from protobuf field <code>int32 position = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPosition($var)
    {
        GPBUtil::checkInt32($var);
        $this->position = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.magento.catalogStorefrontApi.proto.Video video_content = 5;</code>
     * @return \Magento\CatalogStorefrontApi\Proto\Video
     */
    public function getVideoContent()
    {
        return $this->video_content;
    }

    /**
     * Generated from protobuf field <code>.magento.catalogStorefrontApi.proto.Video video_content = 5;</code>
     * @param \Magento\CatalogStorefrontApi\Proto\Video $var
     * @return $this
     */
    public function setVideoContent($var)
    {
        GPBUtil::checkMessage($var, \Magento\CatalogStorefrontApi\Proto\Video::class);
        $this->video_content = $var;

        return $this;
    }
}