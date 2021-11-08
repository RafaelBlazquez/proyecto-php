<?php
$host="127.0.0.1";
$dbname="ejercicios";
$user="rafael";
$pass="rafael";
$dbh = connect($host,$dbname,$user,$pass);;

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
$stmt = $dbh->prepare("SELECT id,nombre, apellidos,edad FROM alumno");
$stmt->execute();
while($row = $stmt->fetch()) {
    echo $row['id'] . "\n";
    echo $row['nombre'] . "\n";
    echo $row['apellidos'] . "\n";
    echo $row['edad'] . "\n";
    echo "</br>";
}
$data = array( 'nombre' => 'Ariane','apellidos' => 'Bravo','email' => 'ariabravo@gmail.com', 'edad' => 15 );
$stmt = $dbh->prepare("INSERT INTO alumno(nombre,apellidos,email,edad) 
values(:nombre,:apellidos,:email,:edad);");
$stmt->execute($data);

require "ejercicio1.view.php";