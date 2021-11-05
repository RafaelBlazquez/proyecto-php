<?php

session_start();

if(isset($_GET["accion"])) {
    $accion = $_GET["accion"];
    realizarAccion($accion);
}
$personas = inicializarLista();


function inicializarLista(){
    if(!isset($_SESSION["listaPersonas"])){
        $_SESSION["listaPersonas"] = array();
    }
    return $_SESSION["listaPersonas"];
}

function realizarAccion($accion){
    switch ($accion) {
        case "insertar":
            if(isset($_GET["persona"])) {
                $nombrePersona = $_GET["persona"];
                inicializarLista();
                array_push($_SESSION["listaPersonas"], $nombrePersona);
            }
            break;
        case "vaciar":
            unset($_SESSION["listaPersonas"]);
            break;
    }
}

function generarListaPersonas($personas){
    if(count($personas) > 0) {
        echo "<ul>";
        foreach ($personas as $persona) {
            crearElementoLista($persona);
        }
        echo "</ul>";
    } else {
        echo "<p>No hay asistentes</p>";
    }
}

function crearElementoLista($texto){
    echo "<li>{$texto}</li>";
}
require "Ejercicio4.view.php";