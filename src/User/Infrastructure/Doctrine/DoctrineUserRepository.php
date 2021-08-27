<?php

namespace CarSeller\User\Infrastructure\Doctrine;

use CarSeller\User\Domain\User;
use CarSeller\User\Domain\UserRepository;
use App\Models\User as DoctrineUser;

class DoctrineUserRepository implements UserRepository
{

    public function save(User $user)
    {

    }

    public function getByEmail($data)
    {
        // TODO: Implement getByEmail() method.
    }

    public function ExistUserByEmailOrFail($email)
    {
        // TODO: Implement ExistUserByEmailOrFail() method.
    }
}
