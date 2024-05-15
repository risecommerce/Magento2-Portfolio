<?php
/**
 *
 * * @copyright Copyright (c) 2017-2021 Risecommerce IT Solutions Pvt Ltd. All rights reserved.
 
 */
 
namespace Risecommerce\Portfolio\Controller\Category;

class View extends \Magento\Framework\App\Action\Action
{
    
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}
