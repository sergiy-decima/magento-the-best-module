<?php

declare(strict_types=1);

namespace Decima\TheBestModule\Test\Integration\Plugin;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\TestFramework\Helper\Bootstrap;
use Magento\TestFramework\ObjectManager;

/**
 * @magentoAppIsolation enabled
 * @magentoDbIsolation enabled
 */
class GetProductNamePluginTest extends \PHPUnit\Framework\TestCase
{
    private const STUB_PRODUCT_SKU = '24-MB01';

    private const STUB_PRODUCT_NAME = 'Joust Duffle Bag';

    /**
     * @var ObjectManager
     */
    private $objectManager;

    /**
     * @var ProductRepositoryInterface
     */
    private $productRepository;

    /**
     * @inheritdoc
     */
    protected function setUp(): void
    {
        $this->objectManager = Bootstrap::getObjectManager();
        $this->productRepository = $this->objectManager->get(ProductRepositoryInterface::class);
        $this->productRepository->cleanCache();
    }

    /**
     * @magentoAppArea adminhtml
     * @magentoConfigFixture current_store decima/general/enabled 1
     *
     * @return void
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function testProductNameHasNoPrefixInAdminhtml(): void
    {
        $product = $this->productRepository->get(self::STUB_PRODUCT_SKU);

        $this->assertEquals(self::STUB_PRODUCT_NAME, $product->getName());
    }

    /**
     * @magentoAppArea frontend
     * @magentoConfigFixture current_store decima/general/enabled 1
     *
     * @return void
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function testProductNameHasPrefixWhenModuleIsEnabled(): void
    {
        $productName = sprintf('The Best %s', self::STUB_PRODUCT_NAME);
        $product = $this->productRepository->get(self::STUB_PRODUCT_SKU);

        $this->assertEquals($productName, $product->getName());
    }

    /**
     * @magentoAppArea frontend
     * @magentoConfigFixture current_store decima/general/enabled 0
     *
     * @return void
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function testProductNameHasNoPrefixWhenModuleIsDisabled(): void
    {
        $product = $this->productRepository->get(self::STUB_PRODUCT_SKU);

        $this->assertEquals(self::STUB_PRODUCT_NAME, $product->getName());
    }
}
