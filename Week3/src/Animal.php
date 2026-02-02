<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter;

class Animal
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function speak(): string
    {
        return "...";
    }

    public function getName(): string
    {
        return $this->name;
    }
}