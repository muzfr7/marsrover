<?php

declare(strict_types=1);

namespace Mars;

/**
 * Command Class
 * Represents L, R and M commands
 *
 * @author Muzafar Ali Jatoi <muzfr7@gmail.com>
 * @date   18/03/2019
 */
class Command
{
    const LEFT  = 'L';
    const RIGHT = 'R';
    const MOVE  = 'M';

    /**
     * Validates given Command
     *
     * @param  string $command
     *
     * @return bool
     */
    public static function isValid(string $command): bool
    {
        return in_array($command, [
            self::LEFT,
            self::RIGHT,
            self::MOVE,
        ]);
    }
}
