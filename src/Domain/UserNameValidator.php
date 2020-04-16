<?php

declare(strict_types=1);

namespace Example\Domain;

interface UserNameValidator
{
    public function validate(string $username): void;
}