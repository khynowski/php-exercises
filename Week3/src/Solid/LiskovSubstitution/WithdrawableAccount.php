<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter\Solid\LiskovSubstitution;
use Hynkar\PhpStarter\Money;

interface WithdrawableAccount extends Account
{
    public function withdraw(Money $amount): Money;
}