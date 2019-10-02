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
    <?php 
    include ("conexion.php");
    $sql="SELECT id_reservas , fecha , tipohabitacion , dias from reservas";
    //echo $sql;
    $resultado=$con->query($sql);
    ?>
<table>
    <tr>
    <th>id</th>
    <th>Fecha</th>
    <th>TipoHabitacion</th>
    <th>Dias</th>
    <th><a href="feditar.php" title="feditar.php">Editar</a></th>
    <th><a href="eliminar.php" title="eliminar.php">Eliminar</a></th>
</tr>
<?php 
while ($fila=$resultado->fetch_assoc()) 
{
?><tr>
    <td><?php echo $fila['id_reservas']; ?></td>
    <td><?php echo $fila['fecha']; ?></td>
    <td><?php echo $fila['tipohabitacion']; ?></td>
    <td><?php echo $fila['dias']; ?></td>
</tr>

<?php

}
?>
<a href="Ireserva.php" title="Ireserva.php">Añadir Reserva</a><br>

</table>
</div>

</div>

</body>
</html>