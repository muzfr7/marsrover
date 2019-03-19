<?php

require __DIR__.'/vendor/autoload.php';

$rover = new Mars\Rover('1 2 N');
echo $rover->execute('LMLMLMLMM'); // 1 3 N
echo PHP_EOL;

$rover = new Mars\Rover('3 3 E');
echo $rover->execute('MMRMMRMRRM'); // 5 1 E
echo PHP_EOL;
