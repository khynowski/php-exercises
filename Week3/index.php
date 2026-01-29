<?php

declare(strict_types=1);
require __DIR__ . '/vendor/autoload.php';
use Hynkar\PhpStarter\Greeting;
use Carbon\Carbon;

$greet = new Greeting();
echo $greet->sayHello("Docker");
printf("Now: %s", Carbon::now()->toDateTimeString());
