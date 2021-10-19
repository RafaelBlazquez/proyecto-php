<?php
$ciudades = ["Paris","Berlin","Amsterdam","Praga"];

function getValor($array,$posicion){
    return $array[$posicion];
}

function setValor($array,$posicion,$valor){
    $array[$posicion] = $valor;
}

$resultado1 = getValor($ciudades,1);

setValor($ciudades,1,"Vitoria");

$resultado2 = getValor($ciudades,1);

require "Ejercicio12.view.php";