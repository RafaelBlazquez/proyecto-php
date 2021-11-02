<?php 
    $productos = array(
        [
            "nombre" => 'Pro1',
            "descripcion" => 'Des1',
            "precio" => '1'

        ],
        [
            "nombre" => 'Pro2',
            "descripcion" => 'Des2',
            "precio" => '2'

        ],
        [
            "nombre" => 'Pro3',
            "descripcion" => 'Des3',
            "precio" => '3'

        ],
        [
            "nombre" => 'Pro4',
            "descripcion" => 'Des4',
            "precio" => '4'

        ],
    );
   
    $usuario = $_GET["usuario"];
    $contrasena = $_GET["contrasena"];
    $tabla = "<form action=\"Ejercicio5.php\" method=\"GET\">";
    $tabla = $tabla."<table>";
    $tabla = $tabla."<tr>";
    $tabla = $tabla."<td>Nombre</td>";
    $tabla = $tabla."<td>Descripcion</td>";
    $tabla = $tabla."<td>Precio</td>";
    $tabla = $tabla."<td>Cantidad</td>";
    $tabla = $tabla."</tr>";
    foreach($productos as $producto){
        $tabla = $tabla."<tr>";
        $tabla = $tabla."<td>".$producto["nombre"]."</td>";
        $tabla = $tabla."<td>".$producto["descripcion"]."</td>";
        $tabla = $tabla."<td>".$producto["precio"]."</td>";
        $tabla = $tabla."<td> <label for=\"precio".$producto["nombre"]."\">Unidades:</label><input name=\"unidades".$producto["nombre"]."\"type=\"text\" id=\"usuario\"".$producto["nombre"]."></td>";
        $tabla = $tabla."</tr>";
    }
    $tabla = $tabla."</table>";
    $tabla = $tabla."<button type=\"submit\">Iniciar sesion</button>";
    

require "Ejercicio5.view.php";