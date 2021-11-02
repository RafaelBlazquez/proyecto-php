<?php
    
    $nombre = $_GET["nombre"];
    setcookie("usuario",$nombre);
    $usuario = $_COOKIE["usuario"];
    require "Ejercicio1.view.php";