<?php

declare(strict_types=1);

namespace ExampleTest\Application;

use Example\Application\CreateUser;
use Example\Domain\Exceptions\InvalidUsernameException;
use Example\Domain\User;
use Example\Domain\UserNameValidator;
use ExampleTest\Infrastructure\UsernameRepositoryDummy;
use ExampleTest\Infrastructure\UsernameRepositoryStub;

use PHPUnit\Framework\TestCase;
use Example\Domain\UserRepository;

final class CreateUserTest extends TestCase
{
    /**
     * @test
     */
    public function shouldCreateAuser()
    {
        $userRepository = new UsernameRepositoryStub();
        $usernameValidator = new UserNameValidator();
        
        $createUser = new CreateUser($userRepository, $usernameValidator);

        $repositoryUser = \Mockery::mock(UserRepository::class);

        $expectedUser = new User('validUsername', '123456', 'email@prueba');
        

        $repositoryUser
            ->shouldReceive('create')
            ->once()
            ->with($expectedUser)
            ->andReturnNull();

        $repositoryUser
            ->shouldReceive('findUser')
            ->once()
            ->with($expectedUser->username())
            ->andReturnNull();

        $actualUser = $createUser('validUsername', '123456', 'email@prueba');

        $this->assertEquals($expectedUser, $actualUser);
    }

    public function testShouldThrowExceptionWhenUsernameIsInvalid(){
        $this->expectException(InvalidUsernameException::class);
        $userRepository = new UsernameRepositoryDummy();
        $usernameValidator = new UserNameValidator();
        $createUser = new CreateUser($userRepository, $usernameValidator);

        $createUser('#invalidUsername','123456', 'email@prueba');
    }

}