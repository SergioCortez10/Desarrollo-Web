 <?php session_start();

	include ("conexion.php");
	$id=$_POST['txtlid'];
	$fecha=$_POST['txtfecha'];
	$tipo=$_POST['txttipo'];
	$dias=$_POST['txtdias'];
	
	$sql="insert into reservas(id_reservas , fecha , tipohabitacion , dias) values ('$id' , '$fecha' , '$tipo' , '$dias')";
	$resultado=$con->query($sql);

		echo  '<meta http-equiv="REFRESH" content ="0;URL=reservas.php">';
?>