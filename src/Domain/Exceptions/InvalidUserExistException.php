<?php

namespace Example\Domain\Exceptions;

use DomainException;

final class InvalidUserExistException extends DomainException
{
    public function __construct()
    {
        parent::__construct($this->errorMessage());
    }

    public function errorMessage():string
    {
        return "User exists.";
    }
}
