<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter;

class Greeting
{
    public function sayHello(string $name): string
    {
        return "Hello, " . $name . "!";
    }
}
