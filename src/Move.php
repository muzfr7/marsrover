<?php

declare(strict_types=1);

namespace Mars;

/**
 * Move Class
 *
 * @author Muzafar Ali Jatoi <muzfr7@gmail.com>
 * @date   18/03/2019
 */
class Move
{
    /**
     * Executes move command on given rover
     *
     * @param  RoverInterface $rover
     *
     * @return Coordinate
     */
    public function execute(RoverInterface $rover): Coordinate
    {
        $x = $rover->coordinate->getX();
        $y = $rover->coordinate->getY();

        switch ($rover->direction) {
            case Direction::NORTH:
                $y += 1;
                break;
            case Direction::SOUTH:
                $y -= 1;
                break;
            case Direction::EAST:
                $x += 1;
                break;
            case Direction::WEST:
                $x -= 1;
                break;
        }

        return new Coordinate($x, $y);
    }
}
