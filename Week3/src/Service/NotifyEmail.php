<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter\Service;

class NotifyEmail implements NotificationSenderInterface
{
    protected string $emailAddress;
    protected string $emailSubject;
    protected string $emailText;

    public function __construct(string $emailAddress, string $emailSubject, string $emailText)
    {
        $this->emailAddress = $emailAddress;
        $this->emailSubject = $emailSubject;
        $this->emailText = $emailText;
    }

    public function sendNotify(): string
    {
        return "[EMAIL] Do: " . $this->emailAddress . " | Temat: " . $this->emailSubject . " | Treść: " . $this->emailText;
    }
}