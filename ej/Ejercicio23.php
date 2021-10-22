<?php
$nombres = ["Ane", "Markel", "Nora", "Danel", "Amaia", "Izaro"];
echo "<ul>";
for ($i=1;$i<=count($nombres);$i++){
    $posicion = $i - 1;
    echo "<li id = $i>$nombres[$posicion]</li>";
}
echo "</ul>";
require "Ejercicio21.view.php";