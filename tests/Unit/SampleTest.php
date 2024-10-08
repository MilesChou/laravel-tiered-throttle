<?php

declare(strict_types=1);

namespace Tests\Unit;

use MilesChou\Laravel\Sample;
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    /**
     * @test
     */
    public function sample(): void
    {
        $this->assertTrue((new Sample())->alwaysTrue());
    }
}
