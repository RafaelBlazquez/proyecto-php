<?php

$numero = $_GET["numero"];
$respuesta =0;
    for($i =0 ; $i<=$numero;$i++){
        if($i%2==0)
        $respuesta = $respuesta+$i;
    }
require "Ejercicio20.view.php";