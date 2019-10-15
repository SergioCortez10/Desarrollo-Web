<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="autentificar.php" method="POST">
		<label for="txtCorreo">Usuario</label>
		<input type="text" name="txtCorreo"
		<?php 
		if(isset($_COOKIE['txtCorreo'])){
			?>
			value="
			<?php
			echo $_COOKIE['txtCorreo'];
		} ?>"><br>

		<label for="txtPasword">Contraseña</label>
		<input type="text" name="txtPassword"
		<?php 
			if(isset($_COOKIE['txtPassword'])){
			?>
			value="
			<?php
			echo $_COOKIE['txtPassword'];}
			?>"><br>

		<input type="checkbox" name="checkbox" id="checkbox" />Recordar usuario <br/>
 		<input type="checkbox" name="checkbox" id="checkbox" />Recordar contraseña <br/>

 		<input type="submit" name="button" id="button" value="Ingresar" /> 
		<form>
	</form>
	
</body>
</html
