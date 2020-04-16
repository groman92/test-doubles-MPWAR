<?php

declare(strict_types=1);

namespace ExampleTest\Infrastructure;


use Example\Domain\UserNameValidator;

final class UsernameValidatorValidStub implements UserNameValidator
{
    public function validate(string $username): void
    {
        return;
    }
}