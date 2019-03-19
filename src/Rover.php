<?php

declare(strict_types=1);

namespace Mars;

/**
 * Rover Class
 * Represents a rover
 *
 * @author Muzafar Ali Jatoi <muzfr7@gmail.com>
 * @date   18/03/2019
 */
class Rover implements RoverInterface
{
    /**
     * @var Coordinate
     */
    public $coordinate;
    
    /**
     * @var string
     */
    public $direction;

    /**
     * Create a new Rover instance.
     *
     * @param  string $positionWithDirection Example: 1 2 N
     *
     * @return void
     */
    public function __construct(string $positionWithDirection)
    {
        $positionWithDirectionArr = explode(' ', $positionWithDirection);

        $x = (int)$positionWithDirectionArr[0];
        $y = (int)$positionWithDirectionArr[1];
        $direction = (string)$positionWithDirectionArr[2];

        $this->coordinate = new Coordinate($x, $y);
        $this->direction = $this->setDirection($direction);
    }

    /**
     * Executes given commands to control the rover
     *
     * @param  string $commands Example: LMLMLMLMM
     *
     * @return string
     */
    public function execute(string $commands): string
    {
        foreach (str_split($commands) as $c) {
            (new CommandFactory())->execute($c, $this);
        }

        return $this->getPositionWithDirection();
    }

    protected function setDirection(string $direction)
    {
        if (false === Direction::isValid($direction)) {
            throw new \Exception('Unsupported direction given: ' . $direction);
        }

        return $direction;
    }

    /**
     * Returns current position and direction of the rover
     *
     * Example: 1 3 N
     *
     * @return string
     */
    private function getPositionWithDirection(): string
    {
        return $this->coordinate->getX() . ' ' . $this->coordinate->getY() . ' ' . $this->direction;
    }
}
