<?php

declare(strict_types=1);

namespace Mars;

/**
 * TurnLeft Class
 * Rotates the rover to left
 *
 * @author Muzafar Ali Jatoi <muzfr7@gmail.com>
 * @date   18/03/2019
 */
class TurnLeft
{
    /**
     * Executes turn left command on given rover
     *
     * @param  RoverInterface $rover
     *
     * @return string
     */
    public function execute(RoverInterface $rover): string
    {
        switch ($rover->direction) {
            case Direction::NORTH:
                $direction = Direction::WEST;
                break;
            case Direction::SOUTH:
                $direction = Direction::EAST;
                break;
            case Direction::EAST:
                $direction = Direction::NORTH;
                break;
            case Direction::WEST:
                $direction = Direction::SOUTH;
                break;
        }

        return $direction;
    }
}
