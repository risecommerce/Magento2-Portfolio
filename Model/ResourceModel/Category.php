<?php
/**
 * * @copyright Copyright (c) 2017-2021 Risecommerce IT Solutions Pvt Ltd. All rights reserved.
 
 */
namespace Risecommerce\Portfolio\Model\ResourceModel;

class Category extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize connection and table
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('risecommerce_portfolio_category', 'category_id');
    }
	
	/**
     * Process block data before deleting
     *
     * @param \Magento\Framework\Model\AbstractModel $object
     */
    protected function _beforeDelete(\Magento\Framework\Model\AbstractModel $object)
    {
        $condition = ['category_id = ?' => (int)$object->getId()];

        $this->getConnection()->delete($this->getTable('risecommerce_portfolio_category_items'), $condition);

        return parent::_beforeDelete($object);
    }
}
