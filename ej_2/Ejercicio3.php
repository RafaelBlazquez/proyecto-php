<?php 
 $numeros = [];
 generarNumeros();
 $respuesta;

function generarNumeros(){
    for($i=0;$i<20;$i++){
        $valor= random_int(1,10);
        array_push($numeros ,$valor);
    }
}
$numero = $_GET["numero"];
$respuesta =validarDatos($numero) ? contar($numero,$numeros) : ""; 

function validarDatos($numero){
    if (isset($numero)){
        if($numero == "" ){
            return false;
        }
        else{
            return true;
        }
    }
    else
        return false;
}

function contar($numero,$numeros){
    var_dump($numeros) ;
    $respuesta=0;
    for($i = 0; $i<count($numeros);$i++){
        $respuesta = $numero==$numeros[$i] ? $respuesta++ : "";    
    }
    return $respuesta;
}
require "Ejercicio3.view.php";