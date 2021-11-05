<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hands on 3</title>
</head>
<body>
<?php
if(isset($idioma)) {
?>
<p>Lista de asistentes <?= $asistentes?></p>
<?php
} else {
?>
<p>No hay ningún asistente</p>
<?php
}
?>
    <form action="Ejercicio4.php" method="GET">
    <label for="asistente">A&ntilde;adir asistente</label>
    <input name="asistente" id="asistente" type="text">
    <button type="submit">Anadir</button>
    <a href="Ejercicio2.php?accion=borrarCookie">Borrar</a>
</form>
</body>
</html>