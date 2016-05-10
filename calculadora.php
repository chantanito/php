<!DOCTYPE html>
<html>
<head>
	<?php $title="Calculadora factorial"; ?>
	<title><?php echo $title; ?></title>
</head>
<body>
<h1><?php echo $title; ?></h1>
<?php 
/* Verifico que el valor haya sido ingresado
de lo contrario muestro el formulario */
if(!isset($_POST['submit'])) {
?>
<form action="calculadora.php" method="POST" accept-charset="utf-8">
	<input type="text" maxlength="2" name="numero" value="" size="3" placeholder="Escriba aquí el número">
	<input type="submit" name="submit" value="Calcular">
</form>
<?php 
} else {
	//Me traigo el número ingresado
	$numero=$_POST['numero'];
	if($numero <= 0) {
		echo "Por favor introduzca un número mayor a cero";
		exit();
	}
	echo "El número ingresado fue $numero";
	echo "<br>";
	echo "<br>";
	$factorial=1;
	for ($x=$numero; $x>=1; $x--) {
		$factorial *= $x;
	}
	echo "El factorial de $numero es: ".number_format($factorial, 2, ',', '.');
	echo "<br>";
	echo "<br>";
	printf("%05d", 65);
}
 ?>
</body>
</html>