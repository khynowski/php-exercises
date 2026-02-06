<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter\Service;

interface ExchangeRateProviderInterface
{
    public function getRateFor(string $currency): float;
}