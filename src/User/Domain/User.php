<?php

namespace CarSeller\User\Domain;

use CarSeller\Common\Domain\DateService;
use CarSeller\Common\Domain\IdGenerator;
use DateTimeImmutable;

class User
{
    private $id;
    private $created_at;
    private $updated_at;
    private $name;
    private $email;

    /**
     * @param $id
     * @param DateTimeImmutable $created_at
     * @param DateTimeImmutable $updated_at
     * @param string $name
     */
    private function __construct(
        $id,
        DateTimeImmutable $created_at,
        ?DateTimeImmutable $updated_at,
        string $name)
    {
        $this->id = $id;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->name = $name;

    }
    public static function fromName($id,DateTimeImmutable $created_at,string $name,string $email){
        return new User($id,$created_at,null,$name,$email);
    }


}
