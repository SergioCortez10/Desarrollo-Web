 <?php session_start();
	include ("conexion.php");
	$n=$_COOKIE['n'];

	$id=1;
	$nombre=$_POST['txtNombre'];
	$apellido=$_POST['txtApellido'];
	$cu=$_POST['txtCU'];
	$sexo=$_POST['txtMasculino'];
	$sexo=$_POST['txtFemenino'];
	$carrera=$_POST['txtselect'];
	$sql="insert into alumnos(Id,Nombres,Apellidos,CU,Sexo,Carrera) values ('$id','$nombre','$apellido','$cu','$sexo','$carrera')";
	$resultado=$con->query($sql);
	
		echo  '<meta http-equiv="REFRESH" content ="0 ; URL=Fitroduccion.html">';
?>


