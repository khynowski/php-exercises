<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter\Solid\OpenClosed;

interface DiscountStrategy
{
    public function apply(int $price): int;
}