<?php
$marcas = ["Audi", "Seat", "Mercedes", "Volkswagen", "BMW", "Fiat"];
$i=0;
echo "<ul>";
do {
    $posicion = $i;
    echo "<li id =".($i+1).">$marcas[$posicion]</li>";
    $i++;
}
while($i!=count($marcas));
echo "</ul>";
require "Ejercicio21.view.php";