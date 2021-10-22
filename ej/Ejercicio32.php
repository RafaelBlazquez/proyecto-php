<?php
$notas =[
    [
        "nombre"=> "Luis Scola",
        "nota1" => 9,
        "nota2" => 8,
    ],
    [
        "nombre"=> "Pablo Prigioni",
        "nota1" => 8,
        "nota2" => 4,
    ],
    [
        "nombre"=> "Sergi Vidal",
        "nota1" => 7,
        "nota2" => 6,
    ],
    [
        "nombre"=> "Ramon Rivas",
        "nota1" => 3.5,
        "nota2" => 6,
    ],
    
];
echo "<table>";
echo"<tr>";
echo "<td>Nombre</td>";
echo "<td>Nota1</td>";
echo "<td>Nota2</td>";
echo "<td>Nota Final</td>";
echo"</tr>";
foreach($notas as $nota){
    echo"<tr>";
    echo "<td>".$nota["nombre"]."</td>";
    if ($nota["nota1"]>=5){
        echo "<td>".$nota["nota1"]."</td>";
    }
    else{
        echo "<td style=\"color:red\">".$nota["nota1"]."</td>";
    }
    if ($nota["nota2"]>=5){
        echo "<td>".$nota["nota2"]."</td>";
    }
    else{
        echo "<td style=\"color:red\">".$nota["nota2"]."</td>";
    }
    if (($nota["nota1"]+$nota["nota2"])/2>=5){
        echo "<td>".(($nota["nota1"]+$nota["nota2"])/2)."</td>";
    }
    else{
        echo "<td style=\"color:red\">".(($nota["nota1"]+$nota["nota2"])/2)."</td>";
    }
    echo"</tr>";
}
echo "</table>";

require "Ejercicio21.view.php";