<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter\Observer;
use Hynkar\PhpStarter\User;

class AdminAlerter implements ObserverInterface
{
    public function handle(User $user): void
    {
        echo "Alert dla admina: Nowy user " . $user->getEmail();
    }
}