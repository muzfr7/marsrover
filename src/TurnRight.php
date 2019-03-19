<?php

declare(strict_types=1);

namespace Mars;

/**
 * TurnRight Class
 * Rotates the rover to right
 *
 * @author Muzafar Ali Jatoi <muzfr7@gmail.com>
 * @date   18/03/2019
 */
class TurnRight
{
    /**
     * Executes turn right command on given rover
     *
     * @param  RoverInterface $rover
     *
     * @return string
     */
    public function execute(RoverInterface $rover): string
    {
        switch ($rover->direction) {
            case Direction::NORTH:
                $direction = Direction::EAST;
                break;
            case Direction::SOUTH:
                $direction = Direction::WEST;
                break;
            case Direction::EAST:
                $direction = Direction::SOUTH;
                break;
            case Direction::WEST:
                $direction = Direction::NORTH;
                break;
        }

        return $direction;
    }
}
