<?php


//index.php

require_once 'Vehicule.php';
require 'Bicycle.php';
require 'Car.php';
require 'Truck.php';


$bicycle = new Bicycle('green', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('red', 4, 'electric');
echo $car->forward();
var_dump($car);

$myCar = new Car('grey', 5, 'gasoline');
echo $myCar->forward();
var_dump($myCar);

$myTruck = new Truck('Black', 3, 'fuel', 38);

var_dump($myTruck);

echo $myTruck->forward();
echo $myTruck->brake();
echo $myTruck->setLoading(15);






echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed(). '  km/h' . '<br>';

echo $bicycle->forward();

echo $bicycle->brake();


echo '<br> Vitesse du véhicule : ' . $car->getCurrentSpeed(). '  km/h' . '<br>';

echo $car->forward();

echo $car->brake();
