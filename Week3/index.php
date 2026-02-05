<?php

declare(strict_types=1);
require __DIR__ . '/vendor/autoload.php';

/*
use Hynkar\PhpStarter\Service\NotifySms;
use Hynkar\PhpStarter\Service\NotifyEmail;
use Hynkar\PhpStarter\Service\NotificationSender;

use Hynkar\PhpStarter\Repository\InMemoryUserRepository;
use Hynkar\PhpStarter\User;
*/

use Hynkar\PhpStarter\Factory\MoneyFactory;


$kasa = MoneyFactory::createFromFloat(100.25, 'EUR');

var_dump($kasa);