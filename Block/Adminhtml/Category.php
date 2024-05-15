<?php
/**
 * * @copyright Copyright (c) 2017-2021 Risecommerce IT Solutions Pvt Ltd. All rights reserved.
 
 */
namespace Risecommerce\Portfolio\Block\Adminhtml;

class Category extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Block constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'adminhtml_portfolio';
        $this->_blockGroup = 'Risecommerce_Portfolio';
        $this->_headerText = __('Portfolio Categories');
        $this->_addButtonLabel = __('Add Category');
        parent::_construct();
    }
	
	/**
     * @return string
     */
    public function getCreateUrl()
    {
        return $this->getUrl('*/*/newcategory');
    }
}
