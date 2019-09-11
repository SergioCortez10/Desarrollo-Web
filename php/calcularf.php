<?php
include("Factorial.php");
$n=$_GET['txtn'];
echo "El factorial de " .$n.
       " es ".factorial($n);
?>