<?php 
echo "<h1>Operador WHILE</h1>";
//Repite constantemente hasta que el contador llegue al
//número especificado por el usuario
if (!isset($_POST['submit'])) {
?>	
<form action="while.php" method="POST" accept-charset="utf-8">
	<input type="text" name="valor" value="0" placeholder="Escriba aquí su número">
	<input type="submit" name="submit" value="Enviar">
</form>
<?php } else {
	//Me traigo el valor ingresado
	$valor=$_POST['valor'];
	while ($valor <= 20) {
		echo "El número es inferior a 20<br>";
		$valor++;
	}
}
?>