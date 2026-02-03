<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter;

class Cow extends Animal
{
    public function speak(): string
    {
        return "Moo!";
    }
}