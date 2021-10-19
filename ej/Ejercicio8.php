<?php
$uno = $_GET["uno"];
$dos = $_GET["dos"];
$resultado = esMayor($uno,$dos);
var_export($resultado);

function esMayor($num1,$num2){
    if (($num1>$num2)){
        return true; 
    }
    else{
        return false;
    }
}

//Respuesta : falseResultado =