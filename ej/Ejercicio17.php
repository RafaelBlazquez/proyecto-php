<?php
$usuarios = [
    "user1"=> [
        "usuario" => "Rafa",
        "contrasena" => "contraRafa",
    ],
    "user2"=> [
        "usuario" => "Aitana",
        "contrasena" => "contraAitana",
    ],
    "user3"=> [
        "usuario" => "Kristina",
        "contrasena" => "contraKristina",
    ],
    "user4"=> [
        "usuario" => "Aizea",
        "contrasena" => "contraAizea",
    ],
];

$usuario = $_GET["user"];
$contrasena = $_GET["password"];
   
    echo  $usuarios[0]["usuario"];

    
    if (array_key_exists($usuario,$usuarios)){
        if ($contrasena == $usuarios[$usuario]["contrasena"]){
            $respuesta = "Sesion iniciada correctamente";
        }
        else{
            $respuesta ="No se ha podido iniciar sesion";
        }
    }
    else{
        $respuesta = "No se ha podido iniciar sesion";
    }

require "Ejercicio17.view.php";