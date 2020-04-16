<?php

declare(strict_types=1);

namespace Example\Application;

use Example\Domain\User;
use Example\Domain\UserNameValidator;
use Example\Domain\UserRepository;

final class CreateUser
{
    private UserRepository $userRepository;
    private UserNameValidator $usernameValidator;

    public function __construct(UserRepository $userRepository, UserNameValidator $usernameValidator)
    {
        $this->userRepository = $userRepository;
        $this->usernameValidator = $usernameValidator;
    }

    public function __invoke(string $username, string $password): User
    {
        $this->usernameValidator->validate($username);

        $user = new User($username, $password);
        $this->userRepository->create($user);
        return $user;
    }
}