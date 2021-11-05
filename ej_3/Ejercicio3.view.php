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
<p>Idioma: <?= $idioma?></p>
<?php
} else {
?>
<p>No hay ningún idioma seleccionado</p>
<?php
}
?>
    <form action="Ejercicio3.php" method="GET">
    <label for="idiomas">Elige tu idioma</label><select name="idioma" id="idioma">
        <option value="Espa&ntilde;ol">Espa&ntilde;ol</option>
        <option value="Euskera">Euskera</option>
    </select>
    <button type="submit">Guardar</button>
</form>
</body>
</html>