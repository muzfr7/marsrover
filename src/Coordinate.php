<?php

declare(strict_types=1);

namespace Mars;

/**
 * Coordinate Class
 * Represents x and y coordinates
 *
 * @author Muzafar Ali Jatoi <muzfr7@gmail.com>
 * @date   18/03/2019
 */
class Coordinate
{
    private $x;
    private $y;

    /**
     * Create a new Coordinate instance.
     *
     * @param  int $x
     * @param  int $y
     *
     * @return void
     */
    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }
}
