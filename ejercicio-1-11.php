<?php 
echo "<h1>Mostrador</h1>";
echo "<hr>";
echo "<br>";
?>
<form action="ejercicio-1-11.php" method="POST" accept-charset="utf-8">
	Campo de texto: <input type="text" name="texto" value="" placeholder="Escriba algo acá"><br><br>
	Área de texto: <textarea name="area" cols="40" placeholder="Escriba algo acá"></textarea>
	Campo oculto: <input type="hidden" name="escondido" value="shhhh"><br><br>
	Contraseña: <input type="password" name="password" value="" placeholder="Escriba su contraseña"><br><br>
	Seleccione su animal preferido:
	<select name="animal">
		<option value="Perro">Perro</option>
		<option value="Gato">Gato</option>
		<option value="Raton">Raton</option>
	</select><br><br>
	<input type="radio" name="gender" value="hombre" checked>Hombre <br>
	<input type="radio" name="gender" value="mujer">Mujer <br>
	<input type="radio" name="gender" value="otro">Otro <br><br>
	<input type="checkbox" name="marca" value="Ford" checked>Ford <br>
	<input type="checkbox" name="marca" value="Chevrolet">Chevrolet <br>
	<input type="checkbox" name="marca" value="Mitsubishi">Mitsubishi <br>
	<input type="checkbox" name="marca" value="Mercedes Benz">Mercedes Benz <br>
	<br>
	<input type="submit" name="submit" value="Enviar todo">
</form>
<?php 
//Me traigo todos los valores
$campoDeTexto=$_POST['texto'];
$escondido=$_POST['escondido'];
$areaDeTexto=$_POST['area'];
$password=$_POST['password'];
$animal=$_POST['animal'];
$gender=$_POST['gender'];
$marca=$_POST['marca'];
echo "Usted escribió en el campo de texto: $campoDeTexto";
echo "<br>";
echo "Usted escribio en el área de texto: $areaDeTexto";
echo "<br>";
echo "El campo oculto contiene: $escondido";
echo "<br>";
echo "Su contraseña es: $password";
echo "<br>";
echo "Su animal preferido es: $animal";
echo "<br>";
echo "Y usted es un(a) gran $gender que maneja un $marca";
?>