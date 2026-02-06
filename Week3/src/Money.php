<?php

declare(strict_types=1);

namespace Hynkar\PhpStarter;
use Hynkar\PhpStarter\Service\ExchangeRateProviderInterface;

class Money
{
    private readonly int $amount;
    private readonly string $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function addMoney(Money $other): Money
    {
        if ($this->currency !== $other->currency) {
            throw new \InvalidArgumentException('Currencies must match to add money.');
        }
        return new Money($this->amount + $other->amount, $this->currency);
    }

    public function equals(Money $other): bool
    {
        return $this->amount === $other->amount && $this->currency === $other->currency;
    }
    
}