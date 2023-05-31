<?php

/**
Copyright © Magento, Inc. All rights reserved.
See COPYING.txt for license details.
 */

namespace Wizzy\Events\Observer\ProductCategoriesGenerated;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class Products implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        $data = $observer->getData('data');
        $categories = $data->getDataByKey('categories');
        foreach ($categories as $category) {
            // Add your logic here to modify the categories data.
        }
        $data->setData('categories', $categories);
        return $data;
    }
}
