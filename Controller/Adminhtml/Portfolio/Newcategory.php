<?php
/**
 * * @copyright Copyright (c) 2017-2021 Risecommerce IT Solutions Pvt Ltd. All rights reserved.
 
 */
namespace Risecommerce\Portfolio\Controller\Adminhtml\Portfolio;

class Newcategory extends \Risecommerce\Portfolio\Controller\Adminhtml\Portfolio
{
    /**
     * Create new customer action
     *
     * @return \Magento\Backend\Model\View\Result\Forward
     */
    public function execute()
    {
        // the same form is used to create and edit
        $this->_forward('editcategory');
    }
}
