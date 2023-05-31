<?php

/**
Copyright © Magento, Inc. All rights reserved.
See COPYING.txt for license details.
 */

namespace Wizzy\Events\Observer\AfterProductMapped;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class Products implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        $data = $observer->getData('data');
        $products = $data->getDataByKey('products');
        foreach ($products as $product) {
            // Add your logic to modify the product.
        }
        $data->setData('products', $products);
        return $data;
    }
}
