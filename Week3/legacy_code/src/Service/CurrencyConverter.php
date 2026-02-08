<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter\Service;
use Hynkar\PhpStarter\Money;

class CurrencyConverter
{
    private ExchangeRateProviderInterface $provider;
    public function __construct(ExchangeRateProviderInterface $provider)
    {
        $this->provider = $provider;
    }

    public function convert(Money $money, string $targetCurrency): Money
    {
        $amountInPLN = $money->getAmount() * $this->provider->getRateFor($money->getCurrency());
        $newAmount = $amountInPLN / $this->provider->getRateFor($targetCurrency);
        $newAmountInt = (int) round($newAmount);
        return new Money($newAmountInt, $targetCurrency);
    }
}