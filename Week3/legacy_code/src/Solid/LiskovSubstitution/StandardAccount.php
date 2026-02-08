<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter\Solid\LiskovSubstitution;
//use Hynkar\PhpStarter\Solid\LiskovSubstitution\WithdrawableAccount;
use Hynkar\PhpStarter\Money;

class StandardAccount implements WithdrawableAccount
{
    private Money $balance;

    public function __construct(Money $initialBalance)
    {
        $this->balance = $initialBalance;
    }

    public function deposit(Money $amount): Money
    {
        $this->balance = $this->balance->addMoney($amount);
        return $this->balance;
    }

    public function withdraw(Money $amount): Money
    {
        $this->balance = $this->balance->subtract($amount); // rzuca wyjątek jeśli brak środków
        return $this->balance;
    }

    public function getBalance(): Money
    {
        return $this->balance;
    }
}