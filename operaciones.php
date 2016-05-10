<?php 
//defino las variables
$x = 20;
$y = 12;
$z = 5;
$w = 10;

echo "Las variables definidas son \$x=$x, \$y=$y, \$z=$z y \$w=$w";
echo "<br>";
echo "<br>";
echo "<hr>";
//realizo la suma de todas las variables
$suma = $x + $y + $z + $w;
echo "La suma de las variables <strong>\$x</strong>, <strong>\$y</strong>, <strong>\$z</strong> y <strong>\$w</strong> es: ".$suma.".";
echo "<br>";
echo "<br>";
$resta = $x - $y;
echo "La resta de \$x menos \$y es $resta";
echo "<br>";
echo "<br>";
// ahora combino las operaciones
$producto = (($x+$y)*$z)-$w;
echo "El producto de (\$x + \$y) por \$z menos \$w es igual a $producto";
?>