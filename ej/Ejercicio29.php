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
foreach($agenda as $contacto){
    echo"<tr>";
    echo "<td>".$contacto["nombre"]."</td>";
    echo "<td>".$contacto["apellidos"]."</td>";
    echo "<td>".$contacto["telefono"]."</td>";
    echo "<td>".$contacto["email"]."</td>";
    echo"</tr>";
}
echo "</table>";
require "Ejercicio21.view.php";