<?php
$cadena1 = $_GET["cadena1"];

$cadena2 = $_GET["cadena2"];

if($cadena1==''){
    $union = unir($cadena2);
}
else{
    $union = unir($cadena2,$cadena1);
}

echo "Union = $union";

function unir($cadena2 ,$cadena1= 'Hola'){
    return $cadena1.' '.$cadena2;  
}