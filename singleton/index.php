<?php
declare(strict_types=1);
require_once('Tigger.php');

$t1 = Tigger::getInstance();
$t2 = Tigger::getInstance();

try {
  $t3 = clone Tigger::getInstance();
} catch(Throwable $t) {
  echo "You cannot clone instances of Tigger because there can only be one." . PHP_EOL;
}

var_dump($t1 === $t2);

$t1->roar();
$t2->roar();
$t2->roar();
$t1->roar();
$t2->roar();

var_dump($t1->getCounter());
var_dump($t2->getCounter());

echo "breakpoint";