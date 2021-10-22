<?php
$nombres = ["Ane", "Markel", "Nora", "Danel", "Amaia", "Izaro"];
$i=0;
echo "<ul>";
while ($i<count($nombres)){
    $posicion = $i;
    echo "<li id =". ($i+1).">$nombres[$posicion]</li>";
    $i++;
}
echo "</ul>";
require "Ejercicio21.view.php";