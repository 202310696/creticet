<?php
echo "<h1>Condicional IF<h1>";

$numero1 = 8;
$numero2 = 6;

if ($numero1 > $numero2){
    echo "El numero" .$numero1. "es mayor que" .$numero2;
}

echo "<h1>Condicional IF ELSE<h1>";

$numero1 = 5;
$numero2 = 6;

if ($numero1 > $numero2){
    echo "El numero" .$numero1. "es mayor que" .$numero2;
}
else{
    echo "El numero" .$numero1. "NO es mayor que" .$numero2;
}

echo "<h1>Condicional IF ELSE<h1>";

$Temperatura = 28;

if($Temperatura > 27){
    echo "Estamos a" .$Temperatura. "grados y esta haciendo calor !!!";
}
elseif ($Temperatura >= 10 && $Temperatura <= 27){
    echo "Estamos a" .$Temperatura. "grados y es un buen clima par salir de paseo.";
}
else{
    echo "Estamos a" .$Temperatura. "grados y esta haciendo frio.";

}