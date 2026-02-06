<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter\Service;
use InvalidArgumentException;

class StaticExchangeRateProvider implements ExchangeRateProviderInterface
{
    private array $BankData= ["PLN" => 1.0,
                            "USD"=> 4.0,
                            "EUR" => 3.37];

    public function getRateFor(string $currency): float{
        if(isset($this->BankData[$currency])) {
            return $this->BankData[$currency];
        }
        else {
            throw new InvalidArgumentException("Nieznana waluta: $currency");
        }
    }
}