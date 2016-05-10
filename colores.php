<!DOCTYPE html>
<html>
<head>
	<?php $title="Tabla de Color en PHP/HTML"; ?>
	<title><?php echo $title; ?></title>
	<!-- Insertamos el estilo CSS !-->
	<style type="text/css" media="screen">
		body { font-family: Verdana sans-serif; }
		td {border: solid;}
	</style>
</head>
<body>
<h1><?php echo $title; ?></h1>
<table>
	<tbody>
		<tr>
			<td>Azul</td>
			<td style="width: 400px; background-color: #0000ff"></td>
		</tr>
		<tr>
			<td><?php echo "Rojo"; ?></td>
			<td style="width: 400px; background-color: <?php echo '#ff0000'; ?>"></td>
		</tr>
		<?php 
		// Ésta fila se genera por PHP
		echo "<tr>\n";
		echo "<td>Verde</td>\n";
		echo "<td style='width: 400px; background-color: #00ff00'></td>\n";
		echo "</tr>\n";
		?>
	</tbody>
</table>
</body>
</html>