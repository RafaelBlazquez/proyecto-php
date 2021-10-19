<?php
$animales = ["Loro","Elefante","Leon","Tigre"];
$colores = ["Verde","Naranja", "Amarillo","Azul"];


$cantidadElementos1 = count($animales);
$cantidadElementos2 = count($colores);

array_push($animales,"Ballena");
array_unshift($colores,"Blanco");
$animalesColores = array_merge($animales,$colores);
require "Ejercicio13.view.php";