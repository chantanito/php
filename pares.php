<!DOCTYPE html>
<html>
<head>
	<?php $title="Comprobación de pares o impares"; ?>
	<title><?php echo $title; ?></title>
</head>
<body>
<h1><?php echo $title; ?></h1>
</body>
<?php 
/* Compruebo si el formulario se ha enviado
sino muestro el formulario */
if (!isset($_POST['submit'])) {
?>
<form action="pares.php" method="POST" accept-charset="utf-8">
	<input type="text" name="numero" value="" placeholder="Escriba su número aquí">
	<input type="submit" name="submit" value="Comprobar">
</form>
<?php 
} else {
	/* Como ya se ha enviado el formulario
	entonce me traigo el número ingresado por el usuario */
	$numero=$_POST['numero'];
	/* Utilizo el operador % que me devuelve el residuo de la división
	Entonces si el número es par no habrá residuo, de lo contrario sí habrá */
	if (($numero % 2 == 0)) {
		echo "El número ingresado es <strong>par</strong>";
	} else {
		echo "El número ingresado es <strong>impar</strong>";
	}
} 
?>
</html>