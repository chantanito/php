<?php 
/* Me traigo todos los valores ingresados por el usuario */
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$edad=$_POST['edad'];
$profesion=$_POST['profesion'];
$residencia=$_POST['residencia'];

/*valido los datos enviados
Empiezo por el nombre */
if(empty($nombre)){
	die ('ERROR: Por favor escriba su nombre');
}
//Sigo con la dirección
if (empty($direccion)) {
	die ('ERROR: Por favor escriba su dirección');
}
//Ahora con la edad
if (empty($edad)) {
	die ('ERROR: Por favor escriba su edad');
} elseif ($edad <18 || $edad > 60){
	die ('ERROR: Las membresías sólo están disponibles para mayores de 18 años y menos de 60.');
}
//La profesión
if (empty($profesion)) {
	die ('ERROR: Por favor escriba su profesión');
}
//Por último el estado de residencia
if (strcmp($residencia, 'no') == 0) {
	die ('ERROR: Las membresías sólo son para residentes');
}

/* Si llegamos a éste punto es porque todos los datos
de entrada han sido validados. Así que creo y envío
la información a un correo electrónico */

$to='chxgo@outlook.com';
$from='santiago.lunar.m@gmail.com';
$subject="Solicitud de membresía";
$body="Nombre: $nombre\r\nDirección $direccion\r\nEdad: $edad\r\nProfesion: $profesion\r\nEstado residencial: $residencia\r\n";
if (mail($to, $subject, $body, "From: $from")) {
	echo "Gracias por enviar su solicitud";
} else {
	die ('ERROR: Error al enviar mensaje');
}

?>