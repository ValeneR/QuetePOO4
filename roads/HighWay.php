<?php

abstract class HighWay {
    protected array $currentVehicles;
    protected int $nbLane;
    protected int $maxSpeed;

    public function __construct(array $currentVehicles, int $nbLane, int $maxSpeed) {
        $this->currentVehicles = $currentVehicles;
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle();

    public function getCurrentVehicle(): array {
        return $this->currentVehicles;
    }
    public function setCurentVehicle(array $currentVehicles): void {
        $this->currentVehicles = $currentVehicles;
    }
    public function getNbLane(): int {
        return $this->nbLane;
    }
    public function setNbLane(int $nbLane): void {
        $this->nbLane = $nbLane;
    }
    public function getMaxSpeed(): int {
        return $this->maxSpeed;
    }
    public function setMaxSpeed(int $maxSpeed): void {
        $this->maxSpeed = $maxSpeed;
    }
}