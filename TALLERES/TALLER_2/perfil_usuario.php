<?php
$nombre_completo = "Jose Rosero";
$edad = 28;
$correo = "jose.rosero@utp.ac.pa";
$telefono = "6235-8314";
define("OCUPACION", "Programador");
$mensaje1 = "Hola, mi nombre es " . $nombre_completo . " y tengo " . $edad . " años.";
$mensaje2 = "Mi correo y telefono son $correo / $telefono y soy " . OCUPACION . ".";

echo $mensaje1 . "<br>";
print($mensaje2 . "<br>");

printf("En resumen: %s, %d años, correo: %s, telefono: %s, %s<br>", $nombre_completo, $edad, $correo, $telefono, OCUPACION);

echo "<br>Información de debugging:<br>";
var_dump($nombre_completo);
echo "<br>";
var_dump($edad);
echo "<br>";
var_dump($correo);
echo "<br>";
var_dump($telefono);
echo "<br>";
var_dump(OCUPACION);
echo "<br>";
