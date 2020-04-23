<?php

declare(strict_types=1);

namespace ExampleTest\Infrastructure;


use Example\Domain\User;
use Example\Domain\UserRepository;

final class UsernameRepositoryDummy implements UserRepository
{

    public function create(User $user): void
    {
        // TODO: Implement create() method.
    }

    public function findUser(string $user): ?User
    {
        // TODO: Implement create() method.
        return null;
    }
}