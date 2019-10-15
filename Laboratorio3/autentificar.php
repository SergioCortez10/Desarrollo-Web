<?php 
    include('conexion.php');
    $correo=$_POST["txtCorreo"];
    $password=sha1($_POST["txtPassword"]);	

    if($recordar=='on'){
	setcookie("txtCorreo",$correo,time()+3600);    	
    }
    if($recordarpasword=='on'){
	setcookie("txtPassword",$password,time()+3600);    	
    }
 

	$sql = "Select * from usuarios where correo='$correo' AND password='$password'";
	$resultado=$con->query($sql); 
	if ($fila = $resultado->fetch_assoc())
		{
		echo  '<meta http-equiv="REFRESH" content ="0;URL=Fitroduccion.html">';
		}

	else
	{
		echo "usted no tiene acceso";
	}
?>