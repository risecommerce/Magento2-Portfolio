<?php
/**
 * * @copyright Copyright (c) 2017-2021 Risecommerce IT Solutions Pvt Ltd. All rights reserved.
 
 */

// @codingStandardsIgnoreFile

namespace Risecommerce\Portfolio\Model;

class Portfolio extends \Magento\Framework\Model\AbstractModel
{
   
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Risecommerce\Portfolio\Model\ResourceModel\Portfolio');
    }
}
