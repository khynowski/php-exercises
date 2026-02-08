<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter\Service;
use Hynkar\PhpStarter\Service\NotificationSenderInterface;

class NotificationSender
{
    private NotificationSenderInterface $notification;

    public function __construct(NotificationSenderInterface $notification)
    {
        $this->notification = $notification;
    }

    public function send(): string
    {
        return $this->notification->sendNotify();
    }
}