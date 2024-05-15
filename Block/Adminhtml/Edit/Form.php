<?php
/**
 * * @copyright Copyright (c) 2017-2021 Risecommerce IT Solutions Pvt Ltd. All rights reserved.
 
 */
namespace Risecommerce\Portfolio\Block\Adminhtml\Edit;

/**
 * Sitemap edit form
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Form extends \Magento\Backend\Block\Widget\Form\Generic
{
	/**
     * @var \Magento\Cms\Model\Wysiwyg\Config
     */
    protected $_wysiwygConfig;
	
    /**
     * @var \Magento\Store\Model\System\Store
     */
    protected $_systemStore;

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Data\FormFactory $formFactory
     * @param \Magento\Store\Model\System\Store $systemStore
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Data\FormFactory $formFactory,
        \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig,
        \Magento\Store\Model\System\Store $systemStore,
        array $data = []
    ) {
        $this->_wysiwygConfig = $wysiwygConfig;
        $this->_systemStore = $systemStore;
        parent::__construct($context, $registry, $formFactory, $data);
    }

    /**
     * Init form
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('portfolio__form');
        $this->setTitle(__('Portfolio Information'));
    }

    /**
     * @return $this
     */
    protected function _prepareForm()
    {
        $model = $this->_coreRegistry->registry('portfolio_category');

        /** @var \Magento\Framework\Data\Form $form */
        $form = $this->_formFactory->create(
            ['data' => ['id' => 'edit_form', 'action' => $this->getUrl('adminhtml/portfolio/savecategory'), 'method' => 'post', 'enctype' => 'multipart/form-data']]
        );

        $fieldset = $form->addFieldset('add_portfolio_form', ['legend' => __('Portfolio Category')]);

        if ($model->getId()) {
            $fieldset->addField('category_id', 'hidden', ['name' => 'category_id']);
        }

        $fieldset->addField(
            'category_name',
            'text',
            [
                'label' => __('Category Name'),
                'name' => 'category_name',
                'required' => true,
                'value' => $model->getCategoryName()
            ]
        );

        $fieldset->addField(
            'description',
            'editor',
            [
                'label' => __('Description'),
                'name' => 'description',
                'config' => $this->_wysiwygConfig->getConfig(), // Add Wysiwyg config
                'required' => true,
                'value' => $model->getDescription()
            ]
        );


        $fieldset->addField(
            'category_discription',
            'text',
            [
                'label' => __('Category Discription'),
                'name' => 'category_discription',
                'required' => true,
                'value' => $model->getCategoryDiscription()
            ]
        );

        $fieldset->addField(
            'meta_discription',
            'text',
            [
                'label' => __('Meta Discription'),
                'name' => 'meta_discription',
                'required' => true,
                'value' => $model->getMetaDiscription()
            ]
        );
        
        $fieldset->addField(
            'meta_title',
            'text',
            [
                'label' => __('Meta Title'),
                'name' => 'meta_title',
                'required' => true,
                'value' => $model->getMetaTitle()
            ]
        );

        $fieldset->addField(
            'identifier',
            'text',
            [
                'label' => __('Identifier'),
                'name' => 'identifier',
				'class' => 'validate-identifier',
                'value' => $model->getIdentifier()
            ]
        );

        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}
