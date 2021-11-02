<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hands On 04</title>
</head>
<body>
    

    <form action="Ejercicio4.php" method="GET">
    
    <label for="usuario">Usuario:</label><input name="usuario"type="text" id="usuario"></br></br>
    <label for="contrasena">Contrase&ntilde;a:</label><input name="contrasena"type="text" id="contrasena"></br></br>

    <button type="submit">Iniciar sesion</button>
    <p> <?php echo $mensaje?></p>
    </form>
</body>
</html>
