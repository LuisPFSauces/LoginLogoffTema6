<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<?php 
		if(isset($tituloVentana)){ 
			echo "<title>$tituloVentana</title>";
		} else {
			echo "<title>404 Titulo Not Found</title>";
		} 
		?>
	</head>
	<body>
		<?php require_once $vista; ?>
		<footer>
			<a href="https://github.com/CristinaNSSauces">GitHub</a>
			<a href="#">Curriculum</a>
		</footer>
	</body>
</html>