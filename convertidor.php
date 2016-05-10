<!DOCTYPE html>
<html>
<head>
	<?php $title="Convertidor monetario USD/EUR" ?>
	<title><?php echo $title; ?></title>
</head>
<body>
<h1><?php echo $title; ?></h1>
<hr>
<?php 
//Por cada dólar son 0.9 Euros
define("USD", 0.9);
//Pide al usuario que ingrese la cantidad que desea convertir
if(!isset($_POST['submit'])) {
	echo "Introduzca la cantidad de dólares: ";
	echo "<br>";
	echo "<br>";
?>
<form action="convertidor.php" method="POST" accept-charset="utf-8">
	<input type="text" name="cantidad" value="0" placeholder="" size="4">
	<input type="submit" name="submit" value="Convertir">
</form>
<?php } else {
//Me traigo la cantidad introducida por el usuario
	$dolares=$_POST['cantidad'];
	echo "Usted introdujo <strong>$dolares</strong> dólares";
	echo "<br>";
	echo "<br>";
	//Hago el cálculo
	$euros=$dolares*USD;
	echo "La cantidad de <strong>$dolares</strong> dólares son <strong>$euros</strong> Euros";
	}
?>

</body>
</html>