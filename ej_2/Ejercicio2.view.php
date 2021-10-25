<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hands On 02</title>
</head>
<body>
    <p><b>Calculadora</b></p><br>
    <p><b>&Uacute;ltimo resultado: <?php echo $respuesta?>
    </b></p>
    <form action="Ejercicio2.php" method="GET">
    <label for="primero">Primer n&uacute;mero :</label><input name="primero"type="text" id="primero"></br></br>
    <label for="segundo">Segundo n&uacute;mero :</label><input name="segundo"type="text" id="segundo"></br></br>
    <label for="operacion">Indica la operacion :</label> <select name="operacion" id="operacion">
        <option value=""></option>
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicaci&oacute;n</option>
        <option value="division">Divisi&oacute;n</option>
    </select><br>
    <button type="submit">Enviar</button>
    </form>
</body>
</html>
