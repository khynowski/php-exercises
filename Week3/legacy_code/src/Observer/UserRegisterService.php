<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter\Observer;
use Hynkar\PhpStarter\User;

class UserRegisterService
{
    private array $observers = [];

    public function attach(ObserverInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    public function register(User $user): void
    {
        foreach($this->observers as $observer){
            $observer->handle($user);
        }
    }
}