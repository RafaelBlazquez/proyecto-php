<?php
$a = $_GET["a"];
$b = $_GET["b"];
if ($a==$b){
   $resultado = $a*$b;
}
else {
    $resultado = $a+ $b;
}
require "Ejercicio16.view.php";