<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace KiwiCommerce\Testimonials\Model\ResourceModel\Testimonials;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    /**
     * @inheritDoc
     */
    protected $_idFieldName = 'testimonials_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            \KiwiCommerce\Testimonials\Model\Testimonials::class,
            \KiwiCommerce\Testimonials\Model\ResourceModel\Testimonials::class
        );
    }
}

