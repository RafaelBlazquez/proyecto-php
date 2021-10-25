<?php 
$enunciado = $_GET["enunciado"];
$unidades = $_GET["unidades"];
$respuesta =validarDatos($unidades,$enunciado) ? hacerCalculos($unidades, $enunciado) : ""; 

function validarDatos($unidades,$enunciado){
    if (isset($unidades,$enunciado)){
        if($unidades == "" ||$enunciado == ""){
            return false;
        }
        else{
            return true;
        }
    }
    else
        return false;
}

function hacerCalculos($unidades,$enunciado){
    if ($unidades=="celsius"){
        $respuesta =$enunciado*9/5 +32;
        return $respuesta;
    }
    else{
        $respuesta =($enunciado-32)*5/9;
        return $respuesta;
    }
}
require "Ejercicio1.view.php";