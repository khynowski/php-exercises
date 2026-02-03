<?php

declare(strict_types=1);
require __DIR__ . '/vendor/autoload.php';
use Hynkar\PhpStarter\Service\NotifySms;
use Hynkar\PhpStarter\Service\NotifyEmail;
use Hynkar\PhpStarter\Service\NotificationSender;

$NotifySms = new NotifySms(724555888, "Hej, właśnie wysłałem SMS");
$NotifyEmail = new NotifyEmail("test@test.te", "Pierwszy Email", "To jest pierwszy email jaki wysyłam");

$notifys = [new NotificationSender($NotifySms), new NotificationSender($NotifyEmail)];

foreach ($notifys as $notification){
    echo $notification->send() . PHP_EOL;
}