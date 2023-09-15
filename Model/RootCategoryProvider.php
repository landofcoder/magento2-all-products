<?php

declare(strict_types=1);

namespace Lof\AllProductsListing\Model;

use Lof\AllProductsListing\Api\RootCategoryProviderInterface;
use Magento\Catalog\Api\Data\CategoryInterface;
use Magento\Catalog\Api\CategoryRepositoryInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Store\Model\StoreManagerInterface;

/**
 * Class RootCategoryProvider
 * @package Lof\AllProductsListing\Model
 */
class RootCategoryProvider implements RootCategoryProviderInterface
{
    /**
     * @var CategoryRepositoryInterface
     */
    private $categoryRepository;

    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    /**
     * RootCategoryProvider constructor.
     * @param CategoryRepositoryInterface $categoryRepository
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(CategoryRepositoryInterface $categoryRepository, StoreManagerInterface $storeManager)
    {
        $this->categoryRepository = $categoryRepository;
        $this->storeManager = $storeManager;
    }

    /**
     * @return CategoryInterface
     * @throws NoSuchEntityException
     */
    public function getRootCategory(): CategoryInterface
    {
        $store = $this->storeManager->getStore();
        $rootCategoryId = $store->getRootCategoryId();
        $rootCategory = $this->categoryRepository->get($rootCategoryId, $store->getId());
        return $rootCategory;
    }
}
