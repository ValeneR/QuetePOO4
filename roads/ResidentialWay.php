<?php
require_once 'HighWay.php';
require_once '/../Vehicle.php';


final class MotorWay extends HighWay {
    public function __construct(array $currentVehicles, int $nbLane = 2, int $maxSpeed = 50) {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
    }

    public function addVehicle(Vehicle $vehicle): void {
            echo "This vehicle is OK!";
    }
}