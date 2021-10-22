<?php
$notas = [
    "Amaia"=> 6.5,
    "Ane"=> 7.5,
    "Maite"=> 5.2,
    "Lorea"=> 9.1,
    "Markel"=> 6.8,
    "Urtzi"=> 8.4,

];

echo "<table>";

foreach($notas as $nombre => $nota)
echo "La nota media de $nombre es $nota <br>";
require "Ejercicio21.view.php";