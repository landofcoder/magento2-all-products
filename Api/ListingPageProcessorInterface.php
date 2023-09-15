<?php

declare(strict_types=1);

namespace Lof\AllProductsListing\Api;

use Magento\Catalog\Api\Data\CategoryInterface;
use Magento\Framework\View\Result\Page;

/**
 * Interface ListingPageProcessorInterface
 * @package Lof\AllProductsListing\Api
 */
interface ListingPageProcessorInterface
{
    /**
     * @param CategoryInterface $category
     * @param Page $page
     * @return void
     */
    public function process(CategoryInterface $category, Page $page) : void;
}
