<?php

namespace CarSeller\User\Domain;

interface UserRepository
{
    public function save(User $user);

    public function getByEmail($email);

    public function ExistUserByEmailOrFail($email);
}
