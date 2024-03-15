<html>
<head>
	<link rel="stylesheet" href="estilos.css" type="text/css"> 
	<title>Desarrollo de aplicaciones: 1° Parcial</title>
</head>
<body>
	<?php
		if (isset($_REQUEST['boton']))
		 {
		 }
		else
		 {
		  ?>
			<div class="formulario">
				<p><h1>Formulario de Admisión</h1></p><hr>
				<form action="Ejercicio1.php" method="post">
					<div>
						Nombre:
						<input type="text" name="nombre"><br><br>
						<input type="checkbox" name="Estudia"> Estudia<br><br>
						<input type="checkbox" name="Trabaja"> Trabaja<br><br>
						<input type="checkbox" name="TieneV"> Tiene Vehículo<br><br>
					</div>
					<div>
						Edad:
						<input type="text" name="edad" size="2"><br><br>
						<input type="radio" name="radio1" value="femenino"> Femenino <br><br>
						<input type="radio" name="radio2" value="masculino"> Masculino
					</div>
					<input type="submit" name="boton" value="Enviar" class="boton">
				</form>
			</div>
		  <?php
		 }
	?>		
</body>
</html>