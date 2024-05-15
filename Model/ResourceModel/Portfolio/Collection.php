<?php
/**
 * * @copyright Copyright (c) 2017-2021 Risecommerce IT Solutions Pvt Ltd. All rights reserved.
 
 */
namespace Risecommerce\Portfolio\Model\ResourceModel\Portfolio;

/**
 * Portfolio resource model collection
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Init resource collection
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Risecommerce\Portfolio\Model\Portfolio', 'Risecommerce\Portfolio\Model\ResourceModel\Portfolio');
    }
}
