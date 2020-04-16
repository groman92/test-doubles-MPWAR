<?php

declare(strict_types=1);

namespace Example\Domain\Exceptions;

use DomainException;

final class InvalidUsernameException extends DomainException
{
    public function __construct()
    {
        parent::__construct($this->errorMessage());
    }

    public function errorMessage():string
    {
        return "User does not exists.";
    }
}