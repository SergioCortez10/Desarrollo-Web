<?php
$m=$_GET['txtn'];

if($m > 0 and $m<=12){
   if($m == 1)
   {
   $m=1;
   echo "<table border = 1><tr><td>......Enero.....</td><td>..V..</td></tr>";
   }
   if($m == 2)
   {
   $m=2;
   echo "<table border = 1><tr><td>......Febrero.....</td><td>..V..</td></tr>";
   } 
   if($m == 3) 
   {
   $m=3;
   echo "<table border = 1><tr><td>......Marzo.....</td><td>..V..</td></tr>";
   }   
   if($m == 4) 
   {
   $m=4;
  echo "<table border = 1><tr><td>......Abril.....</td><td>..V..</td></tr>";
   }  
   if($m == 5) 
   {
   $m=5;
   echo "<table border = 1><tr><td>......Mayo.....</td><td>..V..</td></tr>";
   }
   if($m == 6) 
   {
   $m=6;
   echo "<table border = 1><tr><td>......Junio.....</td><td>..V..</td></tr>";  
   }
   if($m == 7) 
   {
   $m=7;
   echo "<table border = 1><tr><td>......Julio.....</td><td>..V..</td></tr>";  
   }
   if($m == 8) 
   {
      $m=8;
   echo "<table border = 1><tr><td>......Agosto.....</td><td>..V..</td></tr>";  
   }
   if($m == 9) 
   {
   $m=9;
   echo "<table border = 1><tr><td>......Septiembre.....</td><td>..V..</td></tr>";  
   }
   if($m == 10) 
   {
   $m=10;
   echo "<table border = 1><tr><td>......Octubre.....</td><td>..V..</td></tr>";  
   }
   if($m == 11) 
   {
   $m=11;
   echo "<table border = 1><tr><td>......Nobiembre.....</td><td>..V..</td></tr>";    
   }
   if($m == 12) 
   {
   $m=12;
   echo "<table border = 1><tr><td>......Diciembre.....</td><td>..V..</td></tr>";  
   }
   Return $m;
}
else{
	echo "Mes no existente";
}
?>