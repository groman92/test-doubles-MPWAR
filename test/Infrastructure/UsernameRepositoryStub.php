<?php

declare(strict_types=1);

namespace ExampleTest\Infrastructure;


use Example\Domain\User;
use Example\Domain\UserRepository;

final class UsernameRepositoryStub implements UserRepository
{

    public function create(User $user): void
    {
        return;
    }
    public function findUser(string $user): ?\Example\Domain\User
    {
        return null;
    }
}