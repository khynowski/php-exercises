<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter\Solid\OpenClosed;

class DiscountCalculator
{
    public function calculate(int $price, DiscountStrategy $strategy): int
    {
       return $strategy->apply($price);
    }
}