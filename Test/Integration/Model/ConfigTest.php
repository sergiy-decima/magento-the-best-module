<?php

declare(strict_types=1);

namespace Decima\TheBestModule\Test\Integration\Model;

use Decima\TheBestModule\Model\Config;
use Magento\TestFramework\ObjectManager;
use Magento\TestFramework\Helper\Bootstrap;

/**
 * @magentoAppIsolation enabled
 * @magentoDbIsolation enabled
 * @magentoAppArea frontend
 */
class ConfigTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var ObjectManager
     */
    private $objectManager;

    /**
     * @var Config
     */
    private $config;

    /**
     * @inheritdoc
     */
    protected function setUp(): void
    {
        $this->objectManager = Bootstrap::getObjectManager();
        $this->config = $this->objectManager->get(Config::class);
    }

    /**
     * @return void
     */
    public function testIsEnabledByDefault(): void
    {
        $this->assertTrue($this->config->isEnabled());
    }

    /**
     * @magentoConfigFixture current_store decima/general/enabled 1
     *
     * @return void
     */
    public function testIsEnabledWhenModuleIsEnabled(): void
    {
        $this->assertTrue($this->config->isEnabled());
    }

    /**
     * @magentoConfigFixture current_store decima/general/enabled 0
     *
     * @return void
     */
    public function testIsEnabledWhenModuleIsDisabled(): void
    {
        $this->assertFalse($this->config->isEnabled());
    }
}
