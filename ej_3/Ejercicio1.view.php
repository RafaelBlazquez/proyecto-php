<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hands on 1</title>
</head>
<body>
    <form action="Ejercicio1.php" method="GET">
    <label for="nombre">Introduce el texto que deseas motrar</label><input type="text" id="nombre" name="nombre">
    <button type="submit">Guardar</button>
    <?php echo "<br>".$nombre?>    
</form>
</body>
</html>
