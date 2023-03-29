<?php

declare(strict_types=1);

namespace Decima\TheBestModule\Plugin;

class GetProductNamePlugin
{
    private \Decima\TheBestModule\Model\Config $config;

    /**
     * @param \Decima\TheBestModule\Model\Config $config
     */
    public function __construct(\Decima\TheBestModule\Model\Config $config)
    {
        $this->config = $config;
    }

    /**
     * @param \Magento\Catalog\Api\Data\ProductInterface $subject
     * @param string|null $result
     * @return string
     */
    public function afterGetName(\Magento\Catalog\Api\Data\ProductInterface $subject, ?string $result): string
    {
        if ($this->config->isEnabled()) {
            return 'The Best ' . $result;
        } else {
            return $result;
        }
    }
}
