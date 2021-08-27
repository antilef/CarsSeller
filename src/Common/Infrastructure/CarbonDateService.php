<?php

namespace CarSeller\Common\Infrastructure;

use Carbon\CarbonImmutable;
use CarSeller\Common\Domain\DateService;
use DateTimeImmutable;

class CarbonDateService implements DateService
{

    public function now(): DateTimeImmutable
    {
        return CarbonImmutable::now();
    }
}
