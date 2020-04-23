<?php

declare(strict_types=1);

namespace Example\Domain;


use Example\Domain\Exceptions\InvalidUsernameException;
class UserNameValidator
{
    public function validate(string $username): void
    {
        $validator = preg_match('/[^\w\d]/', $username);
        if($validator !== 0){
            throw  new InvalidUsernameException();
        }
        
    }
}