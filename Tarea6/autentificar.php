<?php 
    include('conexion.php');
    $login=$_POST["txtlogin"];
    $password=$_POST["txtpassword"];
	$sql = "Select * from usuarios where login='$login' AND password='$password'";
	$resultado=$con->query($sql); 
	if ($fila = $resultado->fetch_assoc())
		{
		$login=$fila['login'];
		$nivel=$fila['Nivel'];
		session_start();
		$_SESSION['login']=$fila['login'];
		$_SESSION['Nivel']=$fila['Nivel'];

		echo  '<meta http-equiv="REFRESH" content ="0;URL=menu.php">';
		}
	else
	{
		echo "usted no tiene acceso";
	}
?>