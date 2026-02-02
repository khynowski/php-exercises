<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter;

class Address
{
    private string $city;
    private string $street;

    public function __construct(string $city, string $street)
    {
        $this->city = $city;
        $this->street = $street;
    }

    public function getFullString(): string
    {
        return $this->city . ", " . $this->street;
    }
}