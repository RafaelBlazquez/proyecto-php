<?php
$agenda = [
    [
        "nombre" => "Rafa",
        "apellidos" => "Blazquez",+
        "telefono" => "945111111",
        "email" => "rafab@gmail.com",
    ],
    [
        "nombre" => "Aitana",
        "apellidos" => "Barambones",+
        "telefono" => "945111112",
        "email" => "aitanab@gmail.com",
    ],
    [
        "nombre" => "Ariane",
        "apellidos" => "Bravo",+
        "telefono" => "945123111",
        "email" => "arianeb@gmail.com",
    ],
    [
        "nombre" => "Amaia",
        "apellidos" => "Valdemoro",+
        "telefono" => "945111761",
        "email" => "amaiav@gmail.com",
    ],
    [
        "nombre" => "Mikel",
        "apellidos" => "Barea",+
        "telefono" => "945531761",
        "email" => "mikelb@gmail.com",
    ],
];
////////////////////////////////////////////////////////////////
echo "<ul>";
for ($i=1;$i<=count($nombres);$i++){
    $posicion = $i - 1;
    echo "<li id = $i>$nombres[$posicion]</li>";
}
echo "</ul>";
require "Ejercicio21.view.php";