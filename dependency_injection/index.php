<?php
declare(strict_types=1);
require_once('Head.php');
require_once('ManBody.php');
require_once('WomanBody.php');

$h1 = new Head(new ManBody());
$h2 = new Head(new WomanBody());

echo '$h1, are you ready to go?' . PHP_EOL;
echo ($h1->amIReadyToGo() ? 'Yes, I am.' : 'No, I am not.') . PHP_EOL;

echo PHP_EOL . '$h2, are you ready to go?'  . PHP_EOL;
echo ($h2->amIReadyToGo() ? 'Yes, I am.' : 'No, I am not.') . PHP_EOL;