<?php $n=$_POST['txtn'];
setcookie("txtn",$n,time()+3600);
?>
<form action="fdatos.php" method="POST">
	<?php for($i=1;$i<=$n;$i++)	
	{ echo $i ;?>

		Nombre: <input type="txtNombre" name = "txtNombre<?php echo $i?>">
		Apellido:<input type="txtApellido" name="txtApellido<?php echo $i?>">
		Cu:<input type="txtCU" name="txtCU<?php echo $i?>">
		Sexo :<input type="radio" name="radio" id="radio" value="txtMasculino"/>Masculino
		      <input type="radio" name="radio" id="radio" value="txtFemenino"/>Femenino
		Carrera: <select name="select" id="txtselect">
        <option value="1" selected="selected">Ing. sistemas</option>
        <option value="2" selected="selected">Ing. Ciencias de la comp</option>
        <option value="3" selected="selected">Ing. Tecnoligia de la inf.</option></select>
		<br>
		<br>
		<br>

	<?php } ?>

	<br>


		<input type="submit" value="Enviar">
	</form>