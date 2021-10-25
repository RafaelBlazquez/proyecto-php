<?php 
$primero = $_GET["primero"];
$segundo = $_GET["segundo"];
$operacion = $_GET["operacion"];
$respuesta =validarDatos($primero,$segundo,$operacion) ? hacerCalculos($primero,$segundo,$operacion) : ""; 

function validarDatos($primero,$segundo,$operacion){
    if (isset($primero,$segundo,$operacion)){
        if($primero == "" ||$segundo == ""||$operacion == ""){
            return false;
        }
        else{
            return true;
        }
    }
    else
        return false;
}

function hacerCalculos($primero,$segundo,$operacion){
    if ($operacion=="suma"){
        $respuesta =$primero + $segundo;
        return $respuesta;
    }
    if ($operacion=="resta"){
        $respuesta =$primero - $segundo;
        return $respuesta;
    }
    if ($operacion=="multiplicacion"){
        $respuesta =$primero * $segundo;
        return $respuesta;
    }
    if ($operacion=="division"){
        $respuesta =$primero / $segundo;
        return $respuesta;
    }
}
require "Ejercicio2.view.php";