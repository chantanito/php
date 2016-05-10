<!DOCTYPE html>
<html>
<head>
	<?php $title="Muestrario de colores PHP/HTML"; ?>
	<title><?php echo $title; ?></title>
</head>
<body>
<h1><?php echo $title; ?></h1>
<?php 
//Me traigo los valores ingresados por el usuario
$red=$_POST['red'];
$green=$_POST['green'];
$blue=$_POST['blue'];
echo "El color RGB introducido fue: ";
$RGB=$red.",".$green.",".$blue;
echo $RGB;
?>
<div style="width: 230px; height:320px; background-color: rgb(<?php echo $RGB; ?>)">
</div>
</body>
</html>