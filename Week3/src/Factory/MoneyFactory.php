<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter\Factory;
use Hynkar\PhpStarter\Money;

class MoneyFactory
{
    static function createFromFloat(float $amount, string $currency): Money
    {
        $correctAmount = (int) round($amount * 100);
        return new Money($correctAmount, $currency);
    }

    static function createFromString(string $amount, string $currency): Money
    {
       $correctAmount = floatval(preg_replace("/[^-0-9\.]/","",$amount));
       return self::createFromFloat($correctAmount, $currency);
    }
}