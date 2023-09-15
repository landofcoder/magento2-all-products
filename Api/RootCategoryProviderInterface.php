<?php

declare(strict_types=1);

namespace Lof\AllProductsListing\Api;

use Magento\Catalog\Api\Data\CategoryInterface;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Class RootCategoryProviderInterface
 * @package Lof\AllProductsListing\Api
 */
interface RootCategoryProviderInterface
{
    /**
     * @return CategoryInterface
     * @throws NoSuchEntityException
     */
    public function getRootCategory() : CategoryInterface;
}
