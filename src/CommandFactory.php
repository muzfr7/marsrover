<?php

declare(strict_types=1);

namespace Mars;

/**
 * CommandFactory Class
 *
 * @author Muzafar Ali Jatoi <muzfr7@gmail.com>
 * @date   18/03/2019
 */
class CommandFactory
{
    public function execute(string $command, RoverInterface $rover)
    {
        switch ($command) {
            case Command::LEFT:
                $rover->direction = (new TurnLeft())->execute($rover);
                break;
            case Command::RIGHT:
                $rover->direction = (new TurnRight())->execute($rover);
                break;
            case Command::MOVE:
                $rover->coordinate = (new Move())->execute($rover);
                break;
            default:
                throw new \Exception('Unsupported command given: ' . $command);
        }
    }
}
