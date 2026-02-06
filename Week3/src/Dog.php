<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter;

class Dog extends Animal
{
    public function speak(): string
    {
        return "Hau!";
    }
}