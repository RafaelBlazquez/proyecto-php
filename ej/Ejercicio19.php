<?php

$numero = $_GET["numero"];
$respuesta =0;
    for($i =0 ; $i<=$numero;$i++){
        $respuesta = $respuesta+$i;
    }
require "Ejercicio19.view.php";