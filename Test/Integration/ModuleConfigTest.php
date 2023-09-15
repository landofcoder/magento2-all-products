<?php

declare(strict_types=1);

namespace Lof\AllProductsListing\Test\Integration;

use \Magento\Framework\Component\ComponentRegistrar;
use \Magento\Framework\Module\ModuleList;
use \Magento\TestFramework\Helper\Bootstrap;
use \PHPUnit\Framework\TestCase;

/**
 * Class ModuleConfigTest
 * @package Lof\AllProductsListing\Test\Integration
 */
class ModuleConfigTest extends TestCase
{
    /**
     * @const string
     */
    const MODULE_NAME = 'Lof_AllProductsListing';


    /**
     * @test
     */
    public function testTheModuleIsRegistered()
    {
        $registrar = new ComponentRegistrar();
        $this->assertArrayHasKey(self::MODULE_NAME, $registrar->getPaths(ComponentRegistrar::MODULE));
    }


    /**
     * @test
     */
    public function testTheModuleIsConfiguredAndEnabled()
    {
        $objectManager = Bootstrap::getObjectManager();
        $moduleList = $objectManager->create(ModuleList::class);
        $this->assertTrue($moduleList->has(self::MODULE_NAME));
    }
}
