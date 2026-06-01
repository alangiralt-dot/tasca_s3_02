<?php
declare(strict_types=1);

class Head {
  public function __construct(private BeforeLivingHome $myBody) {}
  public function amIReadyToGo(): bool {
    return 
      $this->myBody->checkWallet() &&
      $this->myBody->checkHouseKeys() &&
      (
        $this->myBody->checkCarKeys() ||
        $this->myBody->checkMotorcycleKeys() ||
        $this->myBody->checkPublicTransportCard()
      ) &&
      $this->myBody->checkSmartphone();
  }
}