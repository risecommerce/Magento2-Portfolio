<?php
namespace Risecommerce\FileAssign\Plugin;

use Magento\Sales\Block\Order\Item\Renderer\DefaultRenderer;
use Magento\Sales\Model\Order;
use Magento\Sales\Model\OrderRepository;
use Risecommerce\FileAssign\Model\ResourceModel\FileAssign\CollectionFactory;
use Magento\Store\Model\StoreManagerInterface;


class OrderItemRenderer
{
    protected $orderRepository;
    protected $fileAssignCollectionFactory;
    protected $storeManager;
    protected $executed = false;
    
    public function __construct(
        OrderRepository $orderRepository,
        CollectionFactory $fileAssignCollectionFactory,
        StoreManagerInterface $storeManager
    ) {
        $this->orderRepository = $orderRepository;
        $this->fileAssignCollectionFactory = $fileAssignCollectionFactory;
        $this->storeManager = $storeManager;
    }

    public function afterToHtml(DefaultRenderer $subject, $result)
    {
        if ($this->executed) {
            return $result;
        }
 
        $mediaUrl = $this->storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        $orderId = $subject->getItem()->getOrder()->getId();
        $order = $this->orderRepository->get($orderId);
        $items = $order->getAllItems();
        $orderStatus = $order->getStatus(); // Fetching order status
        
        if($orderStatus == 'complete'){
            $processedSkus = []; 
            foreach ($items as $item) {

                $sku = $item->getSku();
                if (!in_array($sku, $processedSkus)) {
                        $collection = $this->fileAssignCollectionFactory->create()
                            ->addFieldToFilter('assignorder', ['notnull' => true])
                            ->addFieldToFilter('assignorder', $orderId)
                            ->addFieldToFilter('sku', $sku);
                        $e_items = $collection->getItems(); 
                        $result .= "<ol>";
                        foreach ($e_items as $e_item) {
                            $imageurl = $mediaUrl . $e_item->getImage();
                            if ($subject->getNameInLayout() === 'sales.order.items.renderers.default') {
                                $result .= '<li><a href="' . $imageurl . '" download> Download E-sim (' .$sku. ') </a></li>';
                            }
                        }
                        $result .= "</ol>";
                        $processedSkus[] = $sku;
            }
            }
        }else if($orderStatus == 'canceled'){
            $result .= "Your order is Canceled";
        }else{
            $result .= "Please wait until the order is completed";
        }
        $this->executed = true;
        return $result;
    }
}
