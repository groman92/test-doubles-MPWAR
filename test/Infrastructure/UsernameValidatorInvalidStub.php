<?php

declare(strict_types=1);

namespace ExampleTest\Infrastructure;


use Example\Domain\Exceptions\InvalidUsernameException;
use Example\Domain\UserNameValidator;

final class UsernameValidatorInvalidStub implements UserNameValidator
{

    public function validate(string $username): void
    {
        throw new InvalidUsernameException();
    }
}