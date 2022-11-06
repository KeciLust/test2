<?php

declare(strict_types=1);

require_once __DIR__ .'\vendor\autoload.php';
use Professions\Worker;
use Professions\Tester;
use Professions\Director;


$worker = new Worker("Denis", "Nikitin", 5000, "work", 37, "JS", true, "");
$worker2 = new Worker("Alex", "Smith", 3000, "work", 40, "PHP", false, "");
$director = new Director("Peter", "Jons", 1000, "dir", 50, "", true, "all");

echo $director->getFullName() . PHP_EOL;
echo $director->getLeadInterface() . PHP_EOL;
echo $worker->getFullName() . PHP_EOL;
echo $worker->getApplicationCreatorInterface() . PHP_EOL;
echo $worker2->getFullName() . PHP_EOL;
echo $worker2->getApplicationCreatorInterface() . PHP_EOL;
echo $worker2->getPriceCounter() .PHP_EOL;