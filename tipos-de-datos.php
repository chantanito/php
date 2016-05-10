<?php
//Define una variable cadena de texto
$soy = 'Santiago';

//datos de salida: 'Cadena de caracteres'
echo gettype($soy);
echo "<br>";
echo var_dump($soy);
echo "<br>";

//asigna un nuevo valor a la variable
$soy = 99.8;

//datos de salida: 'Doble'
echo gettype($soy);
echo "<br>";
echo var_dump($soy);
echo "<br>";

//destruir la variable
unset($soy);

//datos de salida: 'NULL'
echo gettype($soy);
?>