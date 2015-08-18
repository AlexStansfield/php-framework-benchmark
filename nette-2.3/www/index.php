<?php

// Uncomment this line if you must temporarily take down your site for maintenance.
// require __DIR__ . '/.maintenance.php';

$container = require __DIR__ . '/../app/bootstrap.php';

$container->getByType('Nette\Application\Application')->run();

printf(
    "\n%' 8d:%f",
    memory_get_peak_usage(true),
    microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']
);
