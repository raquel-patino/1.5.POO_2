<?php
declare (strict_types=1);
require_once "Ex_1_Tema5_POO_Gato.php";
require_once "Ex_1_Tema5_POO_Perro.php";

$gato = new Gato();
$gato ->setNombre ("Manchitas");
$gato -> makeSound ();
echo "<br>";

$perro = new Perro();
$perro ->setNombre ("Ron");
$perro -> makeSound ();


?>