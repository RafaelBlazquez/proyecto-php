<?php
if(isset($_GET["idioma"])) {
    $idioma = $_GET["idioma"];
    setcookie("idioma",$idioma, time()+60);
    $selecidioma = $_COOKIE["idioma"];

}

require "Ejercicio3.view.php";