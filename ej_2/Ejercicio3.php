<?php

    $respuesta = empezar();
    
    function empezar(){

        $numeros = generarNumeros();

        mostrarNumeros($numeros);
        $numero = $_GET["numero"];
        $respuesta =validarDatos($numero) ? contar($numero,$numeros) : "";
        return $respuesta;
       
    }
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

    function generarNumeros(){
        $numeros = [];
    for($i=0;$i<20;$i++){
    $valor= random_int(1,10);
    array_push($numeros ,$valor);
    }
    return $numeros;
    }

    
    function contar($numero,$numeros){
        $respuesta=0;
        for($i = 0; $i<count($numeros);$i++){
            $numero==$numeros[$i] ? $respuesta++ : "";    
        }
        return $respuesta;
    }
    function mostrarNumeros($numeros){
        $separado_por_comas = implode(" --- " , $numeros);
        echo $separado_por_comas;
    }
require "Ejercicio3.view.php";