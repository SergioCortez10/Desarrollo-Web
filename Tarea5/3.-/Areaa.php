<?php

if(isset($_POST['button'])){
$base=$_POST['base'];
$altura=$_POST['altura'];

if(empty($_POST['base']) || empty($_POST['altura']) ){

}else{
		$total=(($base*$altura)/2);
		echo "<h2>Areal del Triangulo";
		echo "<br>";
		echo "<h4>Resultado = $total cm2 ";
}
}