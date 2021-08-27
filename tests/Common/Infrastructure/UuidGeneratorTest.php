<?php

namespace Tests\Common\Infrastructure;

use CarSeller\Common\Infrastructure\UuidGenerator;
use PHPUnit\Framework\TestCase;

class UuidGeneratorTest extends TestCase
{
    private $idGenerator;

    protected function setUp(): void
    {
        $this->idGenerator = new UuidGenerator();
    }

    public function testCreateDifferentId(){
        $firstId = $this->idGenerator->get();
        $secondId = $this->idGenerator->get();
        $this->assertNotEquals($firstId,$secondId);
    }
}
