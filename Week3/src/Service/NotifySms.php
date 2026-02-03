<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter\Service;

class NotifySms implements NotificationSenderInterface
{
    protected int $cellNumber;
    protected string $smsText;

    public function __construct(int $cellNumber, string $smsText)
    {
        $this->cellNumber = $cellNumber;
        $this->smsText = $smsText;
    }

    public function sendNotify(): string
    {
        return "[SMS] Do: " . $this->cellNumber . " | Treść: " . $this->smsText;
    }
}