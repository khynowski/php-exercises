<?php

declare(strict_types=1);

namespace Hynkar\PhpStarter\Solid\OpenClosed;

class SummerDiscount implements DiscountStrategy
{
    public function apply(int $price): int
    {
        return (int) round($price * 0.9);
    }
}
