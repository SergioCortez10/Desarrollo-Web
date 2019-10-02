 <?php session_start();

	include ("conexion.php");
	$login=$_POST['txtlogin'];
	$password=$_POST['txtpassword'];
	$nombre=$_POST['txtnombre'];
	$apellido=$_POST['txtapellido'];
	$correo=$_POST['txtcorreo'];
	$sexo=$_POST['txtsexo'];
	$Nivel=$_POST['txtNivel'];
	$sql="insert into usuarios(login,password,nombres,apellidos,email,sexo,Nivel) values ('$login','$password','$nombre','$apellido','$correo','$sexo','$Nivel')";
	$resultado=$con->query($sql);
	
		$login=$fila['login'];
		$nivel=$fila['Nivel'];
		session_start();
		$_SESSION['login']=$fila['login'];
		$_SESSION['Nivel']=$fila['Nivel'];

		echo  '<meta http-equiv="REFRESH" content ="0;URL=menu.php">';
?>