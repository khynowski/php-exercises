<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter;

class Cat extends Animal
{
    public function speak(): string
    {
        return "Miau!";
    }
}