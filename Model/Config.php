<?php

declare(strict_types=1);

namespace Decima\TheBestModule\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Config
{
    public const XPATH_GENERAL_ENABLED = 'decima/general/enabled';

    /**
     * @var ScopeConfigInterface
     */
    private ScopeConfigInterface $scopeConfig;

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * This method will verify if module is enabled
     *
     * @param string|null $scopeCode
     * @return bool
     */
    public function isEnabled(string $scopeCode = null): bool
    {
        return $this->scopeConfig->isSetFlag(self::XPATH_GENERAL_ENABLED, \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $scopeCode);
    }
}
