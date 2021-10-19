<?php
$uno = $_GET["uno"];
$dos = $_GET["dos"];
multiplicar($uno,$dos);

function multiplicar($num1,$num2){
    $resultado = $num1 * $num2;
    echo "Resultado = $resultado";
}
