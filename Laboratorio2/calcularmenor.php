
<form action="Operaciones,php" method="GET">
		<label for="txtn">introduzca a,b,c</label><br>
		<input type="text" name="txtn"><br>
		<input type="text" name="txtn1"><br>
		<input type="text" name="txtn2"><br>
		<input type="submit" value="calcular">
		
	</form>


	<?php
	include('Operaciones.php');
	$a=$_GET['txtn'];
	$b=$_GET['txtn1'];
	$c=$_GET['txtn2'];
	$operaciones = new Operaciones();
	$operaciones->menor($a,$b,$c);
	
	
?>