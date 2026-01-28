<?php

declare(strict_types=1);
require __DIR__ . '/vendor/autoload.php';

$greet = new \Hynkar\PhpStarter\Greeting();
echo $greet->sayHello("World");

use Carbon\Carbon;
printf("Now: %s", Carbon::now()->toDateTimeString());