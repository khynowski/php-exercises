<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter\Service;
use Hynkar\PhpStarter\AddressInterface;

class UsAddress implements AddressInterface
{
    private string $city;
    private string $street;
    private string $state;
    public function __construct(string $city, string $street, string $state)
    {
        $this->city = $city;
        $this->street = $street;
        $this->state = $state;
    }
    public function getFullString() :string
    {
        return $this->street . ", " . $this->city . " ," . $this->state;
    }
}