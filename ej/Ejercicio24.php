<?php
$agenda = [
    [
        "nombre" => "Rafa",
        "apellidos" => "Blazquez",
        "telefono" => "945111111",
        "email" => "rafab@gmail.com",
    ],
    [
        "nombre" => "Aitana",
        "apellidos" => "Barambones",
        "telefono" => "945111112",
        "email" => "aitanab@gmail.com",
    ],
    [
        "nombre" => "Ariane",
        "apellidos" => "Bravo",
        "telefono" => "945123111",
        "email" => "arianeb@gmail.com",
    ],
    [
        "nombre" => "Amaia",
        "apellidos" => "Valdemoro",
        "telefono" => "945111761",
        "email" => "amaiav@gmail.com",
    ],
    [
        "nombre" => "Mikel",
        "apellidos" => "Barea",
        "telefono" => "945531761",
        "email" => "mikelb@gmail.com",
    ],
];

//print_r($agenda[0]) ;


echo "<br>";
echo "<table>";
echo"<tr>";
echo "<td>Nombre</td>";
echo "<td>Apellidos</td>";
echo "<td>Telefono</td>";
echo "<td>Email</td>";
echo"</tr>";
for ($i=0;$i<count($agenda);$i++){
    echo"<tr>";
    echo "<td id=nombre".$i.">".$agenda[$i]["nombre"]."</td>";
    echo "<td id=apellidos".$i.">".$agenda[$i]["apellidos"]."</td>";
    echo "<td id=telefono".$i.">".$agenda[$i]["telefono"]."</td>";
    echo "<td id=email".$i.">".$agenda[$i]["email"]."</td>";
    echo"</tr>";
}
echo "</table>";
require "Ejercicio21.view.php";