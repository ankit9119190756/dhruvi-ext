<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace KiwiCommerce\Testimonials\Block;
use KiwiCommerce\Testimonials\Model\ResourceModel\Testimonials\CollectionFactory as TestimonialsCollectionFactory;

class Testimonials extends \Magento\Framework\View\Element\Template
{

  protected $testimonialsCollectionFactory;

    /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context  $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        TestimonialsCollectionFactory $testimonialsCollectionFactory,
        array $data = []
    ) {
        $this->testimonialsCollectionFactory = $testimonialsCollectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    public function getTestimonials()
    {
        //Your block code
        $collection = $this->testimonialsCollectionFactory->create();
        
        return $collection->getData();

        // return __('Hello Developer! This how to get the storename: %1 and this is the way to build a url: %2', $this->_storeManager->getStore()->getName(), $this->getUrl('contacts'));
    }
}
