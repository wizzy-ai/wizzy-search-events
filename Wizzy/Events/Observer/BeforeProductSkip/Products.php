<?php

/**
Copyright © Magento, Inc. All rights reserved.
See COPYING.txt for license details.
 */

namespace Wizzy\Events\Observer\BeforeProductSkip;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class Products implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        $data = $observer->getData('data');
        $product = $data->getDataByKey('mapped');
        // Add your logic to modifiy the product, before it is skipped.
        $data->setData('mapped', $product);
        return $data;
    }
}
