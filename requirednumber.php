<!DOCTYPE html>
<html>
<head>
<?php $title="Se requiere entrada de números enteros"; ?>
	<title><?php echo $title; ?></title>
</head>
<body>
<h1><?php echo $title; ?></h1>
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
		} 
		else {
			show_welcome();
		}
	
	function show_welcome() {
		echo "<form method='post'>";
		echo "Ingrese su edad como un número entero";
		echo "<br>";
		echo "<input name='number' type='text'>";
		echo "<br>";
		echo "<br>";
		echo "<input type='submit' value='Enviar'>";
		echo "<input type=hidden name='welcome_already_seen' value='already_seen'";
		echo "</form>";
	}

	function check_data() {
		global $errors_array;

		if(strcmp($_REQUEST["number"], strval(intval($_REQUEST["number"])))) {
			$errors_array[] = "<font color='red'>Ingrese un número entero</font>";
		}
	}

	function show_errors() {
		global $errors_array;
		foreach ($errors_array as $err) {
			echo $err, "<br>";
		}
	}

	function handle_data() {
		echo "Su edad es ";
		echo $_REQUEST["number"];
	}
 ?>
</body>
</html>