<?php
require_once 'Bike.php';
require_once 'Cars.php';
require_once 'Truck.php';

$truck = new Truck ('green', 2, 'fuel', 1000);
var_dump($truck);
echo $truck->forward());

$truck2 = new Truck ('white', 3, 'fuel', 1500);
var_dump($truck2);
echo $truck2->forward();

$truck3 = new Truck ('grey', 2, 'essence', 900);
var_dump($truck3);
echo $truck3->forward();

$truck->setCharge(5000);
$truck->getCharge();
var_dump($truck);
echo '<br> Le chargement fait ' . $truck->charge . ' m3 alors que sa capacité maximum est de '. $truck->stockage . ' m3.' . '<br>';
echo $truck->controlCharge();

$motorWay->addVehicle($skate);

$car = new Car ('grey', 5, 'essence');
try {
    $car->start();
}
catch (Exception $e){
    $car->setParkBrake(true);
    echo "Warning ParkBrake is up!!";
}
finally {
    echo "Ma voiture roule comme un donut";
}