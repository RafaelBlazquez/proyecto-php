<?php
$cadena1 = $_GET["cadena1"];
$cadena2 = $_GET["cadena2"];
$union = unir($cadena1,$cadena2);
echo "Union = $union";

function unir($cadena1,$cadena2){
    return $cadena1.' '.$cadena2;  
}