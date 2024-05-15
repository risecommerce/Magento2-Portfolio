<?php
/**
 *
 * * @copyright Copyright (c) 2017-2021 Risecommerce IT Solutions Pvt Ltd. All rights reserved.
 
 */
namespace Risecommerce\Portfolio\Controller\Adminhtml\Portfolio;

use Magento\Backend\App\Action;

class massDeletecategory extends \Risecommerce\Portfolio\Controller\Adminhtml\Portfolio
{
    /**
     * Index action
     *
     * @return void
     */
    public function execute()
    {
		$resultRedirect = $this->resultRedirectFactory->create();
        $ids = $this->getRequest()->getPost('ids');
		if(!is_array($ids)) {
            $this->messageManager->addError(__('Please select categories.'));
        } else {
            try {
                foreach ($ids as $id) {
					$model = $this->_objectManager->create('Risecommerce\Portfolio\Model\Category')
						->load($id)
						->delete();
                }
				$this->messageManager->addSuccess(__('Total of %1 categories were successfully deleted.', count($ids)));
                
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
            }
        }
        return $resultRedirect->setPath('*/*/');
    }
}
