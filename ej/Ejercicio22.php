<?php
$paises = ["Brasil", "Portugal", "Islandia", "Mexico", "Filipinas", "Marruecos"];
$pais = $_GET["pais"];
for ($i=0;$i<count($paises);$i++){
    if ($pais == $paises[$i]){
        $respuesta = $i+1;
    }
}
if ($respuesta == null){
    $respuesta = -1;
}

require "Ejercicio21.view.php";