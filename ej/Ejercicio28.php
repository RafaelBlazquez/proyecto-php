<?php
$marcas = ["Audi", "Seat", "Mercedes", "Volkswagen", "BMW", "Fiat"];
$i=0;
echo "<ul>";
foreach($marcas as $marca){
    $posicion = $i;
    echo "<li>$marca</li>";
    $i++;
}

echo "</ul>";
require "Ejercicio21.view.php";