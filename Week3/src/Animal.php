<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter;

abstract class Animal
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract public function speak(): string;

    public function getName(): string
    {
        return $this->name;
    }
}