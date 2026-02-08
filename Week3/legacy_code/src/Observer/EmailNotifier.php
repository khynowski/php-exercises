<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter\Observer;
use Hynkar\PhpStarter\User;

class EmailNotifier implements ObserverInterface
{
    public function handle(User $user): void
    {
        echo "Wysyłam email powitalny do " . $user->getEmail();
    }
}