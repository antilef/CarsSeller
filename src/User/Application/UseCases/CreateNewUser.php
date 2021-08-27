<?php

namespace CarSeller\User\Application\UseCases;

use CarSeller\Common\Domain\DateService;
use CarSeller\Common\Domain\IdGenerator;
use CarSeller\User\Domain\User;
use CarSeller\User\Domain\UserRepository;

class CreateNewUser
{
    /**
     * @var DateService
     */
    private $dateService;
    /**
     * @var UserRepository
     */
    private $userRepository;

    private $idGenerator;

    public function __construct(UserRepository $userRepository, IdGenerator $idGenerator, DateService $dateService)
    {
        $this->userRepository = $userRepository;
        $this->idGenerator = $idGenerator;
        $this->dateService = $dateService;
    }

    /**
     * @param  $data
     */
    public function execute($data): User
    {
        $id = $this->idGenerator->get();
        $now = $this->dateService->now();

        $this->userRepository->ExistUserByEmailOrFail($data->email);
        $user = User::fromName($id,$now,$data->name,$data->email);
        $this->userRepository->save($user);
        return $user;
    }
}
