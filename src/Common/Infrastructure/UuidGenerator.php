<?php

namespace CarSeller\Common\Infrastructure;

use CarSeller\Common\Domain\IdGenerator;
use Ramsey\Uuid\Uuid;

class UuidGenerator implements IdGenerator
{

    public function get()
    {
        return Uuid::uuid4();
    }
}
