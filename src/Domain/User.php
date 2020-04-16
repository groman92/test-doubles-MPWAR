<?php

declare(strict_types=1);

namespace Example\Domain;

final class User
{
    private string $username;
    private string $password;

    public function __construct(string $username, string $password)
    {

        $this->username = $username;
        $this->password = $password;
    }

}