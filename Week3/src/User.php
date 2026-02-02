<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter;
use Hynkar\PhpStarter\Address;

class User
{
    private string $name;
    private Address $address;

    public function __construct(string $name, Address $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function showProfile(): string
    {
        return "Użytkownik" . $this->name . ", mieszka w: " . $this->address->getFullString();
    }
}