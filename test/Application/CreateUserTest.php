<?php

declare(strict_types=1);

namespace ExampleTest\Application;

use Example\Application\CreateUser;
use Example\Domain\Exceptions\InvalidUsernameException;
use Example\Domain\User;
use ExampleTest\Infrastructure\UsernameRepositoryDummy;
use ExampleTest\Infrastructure\UsernameRepositoryStub;
use ExampleTest\Infrastructure\UsernameValidatorInvalidStub;
use ExampleTest\Infrastructure\UsernameValidatorValidStub;
use PHPUnit\Framework\TestCase;

final class CreateUserTest extends TestCase
{
    /**
     * @test
     */
    public function shouldCreateAuser()
    {
        $userRepository = new UsernameRepositoryStub();
        $usernameValidator = new UsernameValidatorValidStub();
        $createUser = new CreateUser($userRepository, $usernameValidator);

        $expectedUser = new User('validUsername', '123456');
        $actualUser = $createUser('validUsername', '123456');

        $this->assertEquals($expectedUser, $actualUser);
    }

    public function testShouldThrowExceptionWhenUsernameIsInvalid(){
        $this->expectException(InvalidUsernameException::class);
        $userRepository = new UsernameRepositoryDummy();
        $usernameValidator = new UsernameValidatorInvalidStub();
        $createUser = new CreateUser($userRepository, $usernameValidator);

        $createUser('invalidUsername','123456');
    }

}