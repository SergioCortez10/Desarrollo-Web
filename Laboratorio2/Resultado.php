<?php
    include("operaciones.php");
    $n=$_GET['txtn'];
    $cadena=$_GET['txtn2'];
    $a=$_GET['txtn3'];
    $b=$_GET['txtn4'];
    $c=$_GET['txtn5'];
   
    
    $op=new Operaciones($n,$cadena,$a,$b,$c);
    $op->fibonaci();
    $op->menor();
    $op->Piramide();
?>	