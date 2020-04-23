<?php

declare(strict_types=1);

namespace Example\Domain;

final class User
{
    private string $username;
    private string $password;
    private string $email;

    public function __construct(string $username, string $password, string $email)
    {

        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }

    public function username()
    {
        return $this->username;
    }

}