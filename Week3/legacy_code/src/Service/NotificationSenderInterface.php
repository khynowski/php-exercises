<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter\Service;

interface NotificationSenderInterface
{
    public function sendNotify(): string;
}