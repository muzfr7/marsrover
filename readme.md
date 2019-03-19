## Mars Rover
My solution for Mars Rover problem

### Structure
```
root
├── src
│   ├── Rover.php
│   ├── RoverInterface.php
│   ├── Move.php
│   ├── TurnLeft.php
│   ├── TurnRight.php
│   ├── Command.php
│   ├── Coordinate.php
│   └── Direction.php
├── tests
│   └── RoverTest.php
├── vendor
├── app.php
├── readme.md
├── composer.json
├── composer.lock
├── phpunit.xml
└── .gitignore
```

### Prerequisites
PHP7.2, Composer, Git and a Terminal

### Installation
```
$ git clone https://github.com/muzfr7/marsrover.git
$ cd marsrover
$ composer install
```

### Run Tests
```
$ ./vendor/bin/phpunit --testdox
```

---

Please feel free to share your feedback if you find any design related issue!