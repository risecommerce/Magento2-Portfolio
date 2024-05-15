<?php
/**
 *
 * * @copyright Copyright (c) 2017-2021 Risecommerce IT Solutions Pvt Ltd. All rights reserved.
 
 */
namespace Risecommerce\Portfolio\Controller\Adminhtml\Portfolio;

use Magento\Backend\App\Action;

class Delete extends \Risecommerce\Portfolio\Controller\Adminhtml\Portfolio
{
    /**
     * Index action
     *
     * @return void
     */
    public function execute()
    {
		$resultRedirect = $this->resultRedirectFactory->create();
        $id = $this->getRequest()->getParam('id');
		if ($id) {
            try {
                $model = $this->_objectManager->create('Risecommerce\Portfolio\Model\Portfolio');
                $model->setId($id);
                $model->load($id);
				$title =  $model->getTitle();
				$model->delete();
				$this->messageManager->addSuccess(__('You deleted the item "%1".', $title));
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
            }
        }
        return $resultRedirect->setPath('*/*/');
    }
}
