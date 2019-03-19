<?php

declare(strict_types=1);

namespace Mars;

/**
 * Direction Class
 * Represents N, S, E and W directions
 *
 * @author Muzafar Ali Jatoi <muzfr7@gmail.com>
 * @date   18/03/2019
 */
class Direction
{
    const NORTH = 'N';
    const SOUTH = 'S';
    const EAST  = 'E';
    const WEST  = 'W';

    /**
     * Validates given direction
     *
     * @param  string $direction
     *
     * @return bool
     */
    public static function isValid(string $direction): bool
    {
        return in_array($direction, [
            self::NORTH,
            self::SOUTH,
            self::EAST,
            self::WEST,
        ]);
    }
}
