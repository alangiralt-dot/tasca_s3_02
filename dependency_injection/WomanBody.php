<?php
declare(strict_types=1);
require_once('BeforeLivingHome.php');

class WomanBody implements BeforeLivingHome {
  public function checkWallet(): bool {
    echo 'Searching the wallet in my bag...' . PHP_EOL;
    return (bool) rand(0, 1);
  }
  public function checkHouseKeys(): bool {
    echo 'Searching the house keys in my bag...' . PHP_EOL;
    return (bool) rand(0, 1);
  }
  public function checkCarKeys(): bool {
    echo 'Searching the car keys in my bag...' . PHP_EOL;
    return (bool) rand(0, 1);
  }
  public function checkMotorcycleKeys(): bool {
    echo 'Searching the motorcycle keys in my bag...' . PHP_EOL;
    return (bool) rand(0, 1);
  }
  public function checkPublicTransportCard(): bool {
    echo 'Searching the public transport card in my bag...' . PHP_EOL;
    return (bool) rand(0, 1);
  }
  public function checkSmartphone(): bool {
    echo 'Searching the smartphone in my bag...' . PHP_EOL;
    return (bool) rand(0, 1);
  }
}