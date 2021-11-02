<?php
if(isset($_GET["nombre"])|| $_GET["nombre"==""]) {
    $nombre = $_GET["nombre"];
    setcookie("usuario",$nombre);
    $usuario = $_COOKIE["usuario"];
}

if(isset($_GET["accion"])&&$_GET["accion"] == 'borrarCookie') {
    setcookie("usuario", null, -1);
}
require "Ejercicio2.view.php";