<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

use Magento\Eav\Model\Entity\Attribute;
use Magento\Framework\ObjectManagerInterface;
use Magento\Framework\Registry;
use Magento\TestFramework\Helper\Bootstrap;

/** @var ObjectManagerInterface $objectManager */
$objectManager = Bootstrap::getObjectManager();
/** @var Registry $registry */
$registry = $objectManager->get(Registry::class);

$registry->unregister('isSecureArea');
$registry->register('isSecureArea', true);
$attributeCodes = ['color_test', 'size_test'];
foreach ($attributeCodes as $attributeCode) {
    try {
        /** @var Attribute $attribute */
        $attribute = $objectManager->create(Attribute::class);
        $attribute->load($attributeCode, 'attribute_code');
        if ($attribute->getId()) {
            $attribute->delete();
        }
    } catch (Exception $e) {
        // Nothing to delete
    }
}
$registry->unregister('isSecureArea');
$registry->register('isSecureArea', false);
