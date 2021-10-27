<?php
require_once 'Vehicle.php';

class Truck extends Vehicle {
    private int $stockage;
    private int $charge = 0;
    private string $energy;

    public function __contruct (string $color, int $nbSeats, string $energy, int $stockage) {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->stockage = $stockage;
    }

    public function controlCharge(): int {
        $sentence = "";
        if ($this->charge = 100) {
            $sentence .= "FULL";
        }
        else {
            $sentence .= "in filling...";
        }
        return $sentence;
    }

    public function getStockage(): int {
        return $this->stockage;
    }
    public function setStockage(int $stockage): void {
        $this->stockage = $stockage;
    }
    public function getCharge(): int {
        return $this->charge;
    }
    public function setCharge(int $charge): void {
        $this->charge = $charge;
    }
    public function getEnergy(): string {
        return $this->energy;
    }
    public function setEnergy(string $energy): void {
        $this->energy = $energy;
    }
}