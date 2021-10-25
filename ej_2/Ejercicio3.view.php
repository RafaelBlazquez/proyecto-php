<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hands On 03</title>
</head>
<body>
    
    <p><b>El numero aparece <?php echo $respuesta?> veces en la respursta</b></p>
    <form action="Ejercicio3.php" method="GET">
    
    <label for="numero">Introduce numero a buscar</label><input name="numero"type="text" id="numero"></br></br>


    <button type="submit">Probar suerte</button>
    </form>
</body>
</html>
