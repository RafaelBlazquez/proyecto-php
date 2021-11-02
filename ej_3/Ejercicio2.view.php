<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hands on 2</title>
</head>
<body>
<?php
if(isset($nombre)) {
?>
<p>Usuario almacenado: <?= $nombre?></p>
<?php
} else {
?>
<p>No hay ningún usuario almacenado</p>
<?php
}
?>
    <form action="Ejercicio2.php" method="GET">
    <label for="nombre">Introduce el texto que deseas motrar</label><input type="text" id="nombre" name="nombre">
    <button type="submit">Guardar</button>

    <a href="Ejercicio2.php?accion=borrarCookie">Borrar</a>
</form>
</body>
</html>
