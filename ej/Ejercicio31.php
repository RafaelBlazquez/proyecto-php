<?php
$numeros = [];
for($i=0;$i<20;$i++){
    $valor= random_int(1,999);
    array_push($numeros ,$valor);
}
require "Ejercicio21.view.php";
$mayor;
$menor;
$mensaje;
foreach($numeros as $numero){
    if (isset($mayor)&&isset($menor)){
        if($mayor<$numero)
            $mayor=$numero;
        if($menor>$numero)
            $menor=$numero;
    }
    else{
        $mayor=$numero;
        $menor=$numero;
    }
    if (isset($mensaje))
        $mensaje .=", ".$numero;
    else
        $mensaje = $numero;
    
}
echo "El array generado es: $mensaje<br>";
echo "El valor mas bajo del array es $menor<br>";
echo "El valor mas alto del array es $mayor";