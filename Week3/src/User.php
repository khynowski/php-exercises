<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter;
use Hynkar\PhpStarter\AddressInterface;

class User
{
    private string $name;
    private AddressInterface $address;

    public function __construct(string $name, AddressInterface $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function showProfile(): string
    {
        return $this->name . ", mieszka pod adresem: " . $this->address->getFullString();
    }
}