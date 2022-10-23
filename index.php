<?php

declare(strict_types=1);

require_once __DIR__ .'\vendor\autoload.php';
use Professions\Worker;
use Professions\Tester;


$worker = new Worker("Denis", "Nikitin", 5000, "work", 37, "JS");
$worker2 = new Worker("Alex", "Smith", 3000, "work", 40, "PHP");

echo $worker->getFullName() . PHP_EOL;
echo $worker->getApplicationCreatorInterface() . PHP_EOL;
echo $worker2->getFullName() . PHP_EOL;
echo $worker2->getApplicationCreatorInterface() . PHP_EOL;
echo $worker2->getPriceCounter() .PHP_EOL;