<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter\Repository;

use Hynkar\PhpStarter\User;

interface UserRepositoryInterface
{
    public function save(User $user):void;
    public function getByEmail(string $email): ?User;
}