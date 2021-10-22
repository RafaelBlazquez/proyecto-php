<?php
$grupos = ["AC/DC", "Rolling Stones", "Mojinos escocios", "Arnau Griso", "Destripando la Historia", "Los gandules"];
$i=0;
echo "<ul>";
foreach($grupos as $grupo){
    echo "<li>$grupo</li>";
    $i++;
}

echo "</ul>";
require "Ejercicio21.view.php";