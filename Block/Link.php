<?php
/**
 * * @copyright Copyright (c) 2017-2021 Risecommerce IT Solutions Pvt Ltd. All rights reserved.
 
 */
namespace Risecommerce\Portfolio\Block;

use Magento\Framework\View\Element\Template;

/**
 * Main contact form block
 */
class Link extends \Magento\Framework\View\Element\Html\Link
{
    /**
     * @return string
     */
    public function getHref()
    {
        return $this->getUrl('portfolio');
    }
}
