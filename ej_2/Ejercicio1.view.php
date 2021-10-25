<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hands On 01</title>
</head>
<body>
    
    <p><b>Resultado de la conversi&oacute;n <?php echo $respuesta?>
    </b></p>
    <form action="Ejercicio1.php" method="GET">
    <label for="enunciado">Introduce la temperatura:</label><input name="enunciado"type="text" id="enunciado"></br></br>
    <label for="unidades">Indica la unidad de la temperatura introducida</label> <select name="unidades" id="unidades">
        <option value=""></option>
        <option value="celsius">celsius</option>
        <option value="farengheit">farenheit</option>
    </select><br>
    <button type="submit">Enviar</button>
    </form>
</body>
</html>
