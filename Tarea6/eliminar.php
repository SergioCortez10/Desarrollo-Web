<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style = "display: table; margin-left: auto; margin-right: auto; 
              width: 500px;">
    <div style = "height: 170px; width: 800px;background: yellow;">
    	<br><h2 align="center">Bienvenidoa al hotel Tarabuco</h2>
    	<h4 align="center">Usuario : <?php session_start(); 
    	echo $_SESSION['login'] ?><br>
    	<h4 align="center">Nivel: <?php 
    	echo $_SESSION['Nivel'] ?><br></div>
    <div style = "float: left; height: 500px; width: 200px;background: orange;">
    	<ul >
<li><a href="Habitaciones.php" title="Habitaciones.php">Habitaciones</a></li><br>
<li><a href="tipo.php" title="tipo.php">Tipo de habitacion</a></li><br>
<li><a href="reservas.php" title="reservas.php">Reservas</a></li><br>
<li><a href="login.php" title="login.php">Salir</a></li><br>

</ul>
    </div>
    <div style = "float: right; height: 500px; width: 600px;background: green;">
<?php include ("conexion.php");
$id=$_POST['txtid'];
$sql="DELETE FROM reservas where id=$id";
//echo $sql;
$resultado=$con->query($sql);
?>
</div>

</body>
</html>