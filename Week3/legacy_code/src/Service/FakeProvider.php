<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter\Service;

class FakeProvider implements ExchangeRateProviderInterface
{
    public function getRateFor(string $currency): float {
        return 1.0;
    }
}