<?php
$ciudades = ["Paris","Berlin","Amsterdam","Praga"];

function getValor($array,$posicion){
    return $array[$posicion];
}

function setValor($array,$posicion,$valor){
    $array[$posicion] = $valor;
    return $array;
}

$resultado1 = getValor($ciudades,1);

$ciudades = setValor($ciudades,1,"Vitoria");

$resultado2 = getValor($ciudades,1);

require "Ejercicio12.view.php";