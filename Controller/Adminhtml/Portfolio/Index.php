<?php
/**
 *
 * * @copyright Copyright (c) 2017-2021 Risecommerce IT Solutions Pvt Ltd. All rights reserved.
 
 */
namespace Risecommerce\Portfolio\Controller\Adminhtml\Portfolio;

use Magento\Backend\App\Action;

class Index extends \Risecommerce\Portfolio\Controller\Adminhtml\Portfolio
{
    /**
     * Index action
     *
     * @return void
     */
    public function execute()
    {
        $this->_initAction();
        $this->_view->getPage()->getConfig()->getTitle()->prepend(__('Portfolio'));
        $this->_view->renderLayout();
    }
}
