<?php
interface BeforeLivingHome {
  public function checkWallet(): bool;
  public function checkHouseKeys(): bool;
  public function checkCarKeys(): bool;
  public function checkMotorcycleKeys(): bool;
  public function checkPublicTransportCard(): bool;
  public function checkSmartphone(): bool;
}