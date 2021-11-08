<?php
$host="127.0.0.1";
$dbname="ejercicios";
$user="rafael";
$pass="rafael";

$dbh = connect($host,$dbname,$user,$pass);;
select($dbh);
$producto = $_GET["producto"];
$accion = $_GET["accion"];

switch ($_GET["accion"]){
    case "anadir":
        anadir($dbh,$producto);
        break;
}
function connect($host,$dbname,$user,$pass){
    try {
    # MySQL
    $dbh= new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    return $dbh;
    }
    catch(PDOException $e) {
    echo $e->getMessage();
    }
}
function select($dbh){
    $stmt = $dbh->prepare("SELECT nombre FROM listaCompra");
    $stmt->execute();
    while($row = $stmt->fetch()) {
        echo $row['nombre'] . "\n";
    }
}
function anadir($dbh,$producto){
    $data = array( 'producto' => $producto);
    $stmt = $dbh->prepare("INSERT INTO listaCompra(nombre)  values(:producto);");
    $stmt->execute($data);

}
require "ejercicio2.view.php";