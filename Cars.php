<?php
require_once 'Vehicle.php';

class Car extends Vehicle {
    private boolean $hasParkBrak;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric'
    ];
    private string $energy;
    private int $energyLevel;

    public function __contruct (string $color, int $nbSeats, string $energy) {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    
    public function start(): string {
        if ($hasParkBrake === true) {
            throw new Exception("ParkBrake is up!!")
        }
        else {
            return "Go !";
        }
    }

    public function getEnergy(): string {
        return $this->energy;
    }
    public function setEnergy(string $energy): Car {
        if(in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
    public function getEnergyLevel(): int {
        return $this->energyLevel;
    }
    public function setEnergyLevel(int $energyLevel): void {
        $this->energyLevel = $energyLevel;
    }
    public function getParkBrake(): bool {
        return $this->hasParkBrake;
    }
    public function setParkBrake(bool $hasParkBrake): void {
        $this->hasParkBrak = $hasParkBrake;
    }
}