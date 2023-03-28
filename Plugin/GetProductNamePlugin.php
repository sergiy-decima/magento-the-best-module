<?php

declare(strict_types=1);

namespace Decima\TheBestModule\Plugin;

class GetProductNamePlugin
{
    /**
     * @param \Magento\Catalog\Api\Data\ProductInterface $subject
     * @param string|null $result
     * @return string
     */
    public function afterGetName(\Magento\Catalog\Api\Data\ProductInterface $subject, ?string $result): string
    {
        return 'The Best ' . $result;
    }
}
