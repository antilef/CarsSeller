<?php

namespace CarSeller\Common\Domain;

use DateTimeImmutable;

interface DateService
{
    public function now(): DateTimeImmutable ;
}
