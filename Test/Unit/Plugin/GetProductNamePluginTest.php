<?php

declare(strict_types=1);

namespace Decima\TheBestModule\Test\Unit\Plugin;

use Decima\TheBestModule\Model\Config;
use Decima\TheBestModule\Plugin\GetProductNamePlugin;
use Magento\Catalog\Api\Data\ProductInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class GetProductNamePluginTest extends TestCase
{
    /**
     * @dataProvider dataForTestAfterGetName
     *
     * @param bool   $isModuleEnabled
     * @param string $name
     * @param string $expected
     * @return void
     */
    public function testAfterGetName(bool $isModuleEnabled, string $name, string $expected): void
    {
        $config = $this->createStub(Config::class);
        $config->method('isEnabled')->willReturn($isModuleEnabled);

        $product = $this->getOriginSubject();

        $getProductNamePlugin = $this->getSubjectUnderTest($config);
        $actual = $getProductNamePlugin->afterGetName($product, $name);

        $this->assertEquals($expected, $actual);
    }

    /**
     * @return array[][]
     */
    public function dataForTestAfterGetName(): array
    {
        return [
            [true, 'iPhone 12Pro', 'The Best iPhone 12Pro'],
            [true, 'TV Sony', 'The Best TV Sony'],
            [false, 'TV Sony', 'TV Sony'],
        ];
    }

    /**
     * @return ProductInterface|MockObject
     */
    private function getOriginSubject(): ProductInterface
    {
        return $this->getMockBuilder(ProductInterface::class)->getMock();
    }

    /**
     * @param Config $config
     * @return GetProductNamePlugin
     */
    private function getSubjectUnderTest(Config $config): GetProductNamePlugin
    {
        return new GetProductNamePlugin($config);
    }
}
