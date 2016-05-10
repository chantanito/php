<!DOCTYPE html>
<html>
<head>
	<?php $title="Anidación de condicionales SWITCH-CASE"; ?>
	<title><?php echo $title; ?></title>
	<!-- Ésto lo agregué en la web de GIT !-->
</head>
<body>
<h1><?php echo $title; ?></h1>
<?php 
if(!isset($_POST['submit'])) {
?>
<form action="switch.php" method="POST" accept-charset="utf-8">
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
		switch ($dia) {
			case 'Lunes':
				echo "Hoy es $dia";
				break;
			case 'Martes':
				echo "Hoy es $dia";
				break;
			case 'Miercoles':
				echo "Hoy es $dia";
				break;
			case 'Jueves':
				echo "Hoy es $dia";
				break;
			case 'Viernes':
				echo "Hoy es $dia";
				break;
			case 'Sabado':
				echo "Hoy es $dia";
				break;
			case 'Domingo':
				echo "Hoy es $dia";
				break;
			default:
				echo "Por favor seleccione un día";
				break;
	}
} ?>
</body>
</html>
