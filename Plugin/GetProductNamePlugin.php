<?php

declare(strict_types=1);

namespace Decima\TheBestModule\Plugin;

class GetProductNamePlugin
{
    public function afterGetName(\Magento\Catalog\Api\Data\ProductInterface $subject, $result): string
    {
        return 'The Best ' . $result;
    }

    public function someMethod(): int
    {
        $a = 1;
        $b = 2;

        return $a + $b;
    }
}
