<!DOCTYPE html>
<html>
<head>
	<?php $title="Anidación de condicionales IF-ELSEIF-ELSE"; ?>
	<title><?php echo $title; ?></title>
	<!-- Este comentario lo agregué con GIT !-->
</head>
<body>
<h1><?php echo $title; ?></h1>
<?php 
if(!isset($_POST['submit'])) {
?>
<form action="if-else.php" method="POST" accept-charset="utf-8">
	<select name="dia">
		<option value="Lunes">Lunes</option>
		<option value="Martes">Martes</option>
		<option value="Miercoles">Miércoles</option>
		<option value="Jueves">Jueves</option>
		<option value="Viernes">Viernes</option>
		<option value="Sabado">Sábado</option>
		<option value="Domingo">Domingo</option>
	</select>
	<input type="submit" name="submit" value="Enviar">
</form>
<?php } 
	else {
		//Me traigo el día seleccionado por el usuario
		$dia=$_POST['dia'];
		if ($dia == 'Lunes') {
			echo "El $dia los ánimos están perfectos";
			//Empiezo la anidación condicional
		} elseif ($dia == 'Martes') {
			echo "Los $dia los ánimos van bien";
		} elseif ($dia == 'Miercoles') {
			echo "Los $dia los ánimos empiezan a decaer";
		} elseif ($dia == 'Jueves') {
			echo "Los $dia ya deseamos que termine la semana";
		} elseif ($dia == 'Viernes') {
			echo "Por fin ha llegado el $dia";
		} elseif ($dia == 'Sabado') {
			echo "$dia de aprovechar para hacer diligencias";
		} elseif ($dia == 'Domingo') {
			echo "$dia para dormir";
		} else
			echo "No se ha seleccionado un día";
	} ?>
</body>
</html>
