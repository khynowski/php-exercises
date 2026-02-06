<?php

declare(strict_types=1);

namespace Hynkar\PhpStarter\Solid\OpenClosed;

class WinterDiscount implements DiscountStrategy
{
    public function apply(int $price): int
    {
        return (int) round($price * 0.8);
    }
}
