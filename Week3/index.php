<?php

declare(strict_types=1);
require __DIR__ . '/vendor/autoload.php';
use Hynkar\PhpStarter\Animal;
use Hynkar\PhpStarter\Dog;
use Hynkar\PhpStarter\Cat;

$animals = [new Dog("Burek"), new Cat("Mruczek"), new Animal("Nieznany")];

foreach ($animals as $animal){
    echo $animal->getName() . " mówi: " . $animal->speak() . PHP_EOL;
}