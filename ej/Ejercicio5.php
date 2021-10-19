<?php
$a = $_GET["a"];
$b = $_GET["b"];
if ($a==null){
    $a=10;
}
if ($b==null){
    $b=2;
}
$resta = $a-$b;
$division = $a/$b;
$mayor = $a>$b;
$menor = $a<=$b;

echo "resta = $resta <br>
division = $division <br>
mayor =";
var_export($mayor);
echo " <br> menor =";
var_export($menor);

//var_export para booleanos, sólo se muestra si es (!= 0) == true;