<?php

$numero = $_GET["numero"];
$respuesta =0;
    for($i =0 ; $i<=$numero;$i++){
        if($i%2==0){
            if($respuesta+$i<100){
                $respuesta = $respuesta+$i;
            }
            else{
                break;
            }
        }

    }
require "Ejercicio21.view.php";