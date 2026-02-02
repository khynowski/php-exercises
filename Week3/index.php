<?php

declare(strict_types=1);
require __DIR__ . '/vendor/autoload.php';
use Hynkar\PhpStarter\Address;
use Hynkar\PhpStarter\User;

$address = new Address("Wrocław", "Prosta");
$user = new User("Jan", $address);

echo $user->showProfile();