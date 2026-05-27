<?php
declare(strict_types=1);

class Tigger {
  // Properties
  private int $roarCounter = 0;
  private static self $tiggerInstance;
  // Constructor
  private function __construct() {
    echo "Building character..." . PHP_EOL;
  }
  // Getter
  public function getCounter(): int {
    return $this->roarCounter;
  }
  // Methods
  public static function getInstance(): self {
    if (!isset(self::$tiggerInstance)) self::$tiggerInstance = new Tigger();
    return self::$tiggerInstance;
  }
  public function roar(): void {
    $this->roarCounter++;
    echo "Grrr!" . PHP_EOL;
  }
  private function __clone(): void {}
}