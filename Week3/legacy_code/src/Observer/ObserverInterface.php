<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter\Observer;
use Hynkar\PhpStarter\User;

interface ObserverInterface 
{
    public function handle(User $user): void;
}