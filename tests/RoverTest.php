<?php

declare(strict_types=1);

namespace Mars\Test;

use PHPUnit\Framework\TestCase;
use Mars\Rover;

class RoverTest extends TestCase
{
    private $rover;

    public function setUp()
    {
        $this->rover = new Rover('1 2 N');
    }

    public function turnLeftDataProvider()
    {
        return [
            ['L', '1 2 W'],
            ['LL', '1 2 S'],
            ['LLL', '1 2 E'],
            ['LLLL', '1 2 N'],
        ];
    }

    /**
     * @dataProvider turnLeftDataProvider
     */
    public function testTurnLeft(string $commands, string $position): void
    {
        $this->assertSame($position, $this->rover->execute($commands));
    }

    public function turnRightDataProvider()
    {
        return [
            ['R', '1 2 E'],
            ['RR', '1 2 S'],
            ['RRR', '1 2 W'],
            ['RRRR', '1 2 N'],
        ];
    }

    /**
     * @dataProvider turnRightDataProvider
     */
    public function testTurnRight(string $commands, string $position): void
    {
        $this->assertSame($position, $this->rover->execute($commands));
    }
    
    public function moveDataProvider()
    {
        return [
            ['M', '1 3 N'],
            ['RMM', '3 2 E'],
        ];
    }

    /**
     * @dataProvider moveDataProvider
     */
    public function testMove(string $commands, string $position): void
    {
        $this->assertSame($position, $this->rover->execute($commands));
    }
}
