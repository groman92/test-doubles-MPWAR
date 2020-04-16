<?php

declare(strict_types=1);

namespace Example\Domain;

use Example\Domain\User;

interface UserRepository
{
    public function create(User $user):void;
}