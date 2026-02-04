<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter;

class User
{
    private string $email;
    private string $name;

    public function __construct(string $name, string $email)
    {
        $this->email = $email;
        $this->name = $name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}