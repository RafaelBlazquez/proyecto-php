<?php
$dias = [
    "dia1"=> "lunes",
    "dia2"=> "martes",
    "dia3"=> "miercoles",
    "dia4"=> "jueves",
    "dia5"=> "viernes",
    "dia6"=> "sabado",
    "dia7"=> "domingo",
];
$dia = $_GET["dia"];

    switch($dia){
        case 1:
            $respuesta= $dias["dia1"];
            break;
        case 2:
            $respuesta= $dias["dia2"];
            break;
        case 3:
            $respuesta= $dias["dia3"];
            break;
        case 4:
            $respuesta= $dias["dia4"];
            break;
        case 5:
            $respuesta= $dias["dia5"];
            break;
        case 6:
            $respuesta= $dias["dia6"];
            break;
        case 7:
            $respuesta= $dias["dia7"];
            break;
        default:
            $respuesta="Introduce un dia de la semana";
    }
require "Ejercicio18.view.php";