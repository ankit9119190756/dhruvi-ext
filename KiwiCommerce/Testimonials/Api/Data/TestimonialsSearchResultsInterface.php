<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace KiwiCommerce\Testimonials\Api\Data;

interface TestimonialsSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Testimonials list.
     * @return \KiwiCommerce\Testimonials\Api\Data\TestimonialsInterface[]
     */
    public function getItems();

    /**
     * Set company_name list.
     * @param \KiwiCommerce\Testimonials\Api\Data\TestimonialsInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

