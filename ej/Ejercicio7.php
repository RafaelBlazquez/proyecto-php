<?php
$uno = $_GET["uno"];
$dos = $_GET["dos"];
$resultado = multiplicar($uno,$dos);
echo "Resultado = $resultado";

function multiplicar($num1,$num2){
    return $num1 * $num2;  
}
