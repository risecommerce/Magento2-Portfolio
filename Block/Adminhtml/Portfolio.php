<?php
/**
 * * @copyright Copyright (c) 2017-2021 Risecommerce IT Solutions Pvt Ltd. All rights reserved.
 
 */
namespace Risecommerce\Portfolio\Block\Adminhtml;

class Portfolio extends \Magento\Backend\Block\Widget\Grid\Container
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
        $this->_headerText = __('Portfolio');
        $this->_addButtonLabel = __('Add Item');
        parent::_construct();
    }

}
