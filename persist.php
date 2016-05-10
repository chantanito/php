<!DOCTYPE html>
<html>
<head>
	<?php $title="Datos de usuarios persistentes"; ?>
	<title><?php echo $title; ?></title>
</head>
<body>
<h1><?php echo $title; ?></h1>
<!-- Aquí empieza el código PHP !-->
<?php 
	$errors_array = array();

	if(isset($_REQUEST["welcome_already_seen"])) {
		check_data();
		if(count($errors_array) != 0) {
			show_errors();
			show_welcome();
		}
		else {
			handle_data();
		}
	} else {
		show_welcome();
	}

	function show_welcome() {
		$nombre = isset($_REQUEST["first"]) ? $_REQUEST["first"] : "";
		$apellido = isset($_REQUEST["last"]) ? $_REQUEST["last"] : "";
		echo "<form method='post'>";
		echo "Ingrese su nombre: ";
		echo "<input name='nombre' type='text' value='", $nombre, "'>";
		echo "<br>";
		echo "<br>";
		echo "Ingrese su apellido: ";
		echo "<input name='apellido' type='text' value='", $apellido, "'>";
		echo "<br>";
		echo "<br>";
		echo "<input type='submit' value='Enviar'";
		echo "<input type=hidden name='welcome_already_seen' value='already_seen'";
		echo "</form>";
 	}

 	function check_data() {
 		global $errors_array;

 		if($_REQUEST["first"] == "") {
 			$errors_array[] = "<font color='red'>Ingrese su nombre</font>";
 		}
 		if($_REQUEST["last"] == "") {
 			$errors_array[] = "<font color='red'>Ingrese su apellido</font>";
 		}
 	}

 	function show_errors() {
 		global $errors_array;
 		foreach ($errors_array as $err) {
 			echo $err, "<br>";
 		}
 	}

 	function handle_data() {
 		echo "Este es su nombre: ";
 		echo $_REQUEST["first"];
 		echo "<br>Éste es su apellido: <br>";
 		echo $_REQUEST["apellido"];
 	}
 ?>
</body>
</html>