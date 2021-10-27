<?php
require_once 'HighWay.php';
require_once '/../Vehicle.php';
require_once '/../Bike.php';
require_once '/../Skateboard.php';

final class MotorWay extends HighWay {
    public function __construct(array $currentVehicles, int $nbLane = 1, int $maxSpeed = 10) {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
    }

    public function addVehicle(Vehicle $vehicle): void {
        if ($vehicle instanceof Bike || $vehicle instanceof Skateboard) {
            array_push($this->currentVehicles, $vehicle);
            echo "This vehicle is OK!";
        }
        else {
            echo "This vehicule is not allowed!";
        }
    }
}