<?php


require_once 'Bicycle.php';



$bike = new Bicycle();

echo "<pre>";
var_dump($bike);
echo "</pre>";



$bike->color = 'blue';
$bike->currentSpeed = 0;
//var_dump($bike); // then, another dump.
echo "<pre>";
var_dump($bike);
echo "</pre>";

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();



// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle();
$rockrider->color = 'yellow';

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle();
$tornado->color = 'black';

$tornado->forward();


?>