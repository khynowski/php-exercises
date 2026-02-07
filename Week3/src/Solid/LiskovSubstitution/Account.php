<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter\Solid\LiskovSubstitution;
use Hynkar\PhpStarter\Money;

interface Account
{
    public function deposit(Money $amount): Money;
}