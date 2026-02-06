<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter\Repository;
use Hynkar\PhpStarter\User;

class InMemoryUserRepository implements UserRepositoryInterface
{
    private array $users = [];

    public function save(User $user): void
    {
        $this->users[$user->getEmail()] = $user;
    }

    public function getByEmail(string $email): ?User
    {
        if (isset($this->users[$email])) {
            return $this->users[$email];
        }
        return null;
    }
}