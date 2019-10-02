<?php include ("conexion.php");
//$sql="SELECT id,nombres,apellidos,cu,ci from alumnos ";
//echo $sql;
$id=$_POST['txtid'];
$fecha=$_POST['txtfecha'];
$tipo=$_POST['txttipo'];
$dias=$_POST['txtdias'];
$
$sql="update reservas set fecha='$fecha',tipohabitacion='$tipo',dias='$dias' where id=$id";
//echo $sql;
$resultado=$con->query($sql);
?>