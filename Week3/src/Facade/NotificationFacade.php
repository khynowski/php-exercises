<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter\Facade;
use Hynkar\PhpStarter\Observer\EmailNotifier;
use Hynkar\PhpStarter\Observer\AdminAlerter;
use Hynkar\PhpStarter\User;
use Hynkar\PhpStarter\Observer\UserRegisterService;

class NotificationFacade
{
    static function registerAndNotify(string $name, string $email): void
    {
        $user = new User($name, $email);
        
        $service = new UserRegisterService();
        $service->attach(new EmailNotifier());
        $service->attach(new AdminAlerter());

        $service->register($user);
    }
}