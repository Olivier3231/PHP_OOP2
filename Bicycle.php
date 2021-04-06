<?php

// Bicycle.php

require_once 'Vehicule.php';

class Bicycle extends Vehicule

{
    
}

$bicycle = new Bicycle('green', 1);
echo $bicycle->forward();
