<?php

declare(strict_types=1);

namespace ExampleTest\Infrastructure;


use Example\Domain\Exceptions\InvalidUsernameException;


final class UsernameValidatorInvalidStub
{

    public function validate(string $username): void
    {
        throw new InvalidUsernameException();
    }
}