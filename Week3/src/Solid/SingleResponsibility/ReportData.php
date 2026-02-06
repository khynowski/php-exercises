<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter\Solid\SingleResponsibility;

class ReportData
{
    private string $date;
    private int $amount;

    public function __construct(string $date, int $amount)
    {
        $this->date = $date;
        $this->amount = $amount;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }
}