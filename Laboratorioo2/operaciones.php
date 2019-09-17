<?php
    class Operaciones{
        private $n;
        private $cadena;
        private $a;
        private $b;
        private $c;
        

        public function __construct($n,$cadena,$a,$b,$c){
          $this->n=$n;
          $this->cadena=$cadena;
          $this->a=$a;
          $this->b=$b;
          $this->c=$c;
         
        
        }
        public function fibonaci(){
           $x=0;
           $y=1;
           $aux=0; 
          for($i = 0; $i <= $this->n; $i++){
              if($i <=1){
                $aux = $i;
              }else{
                $aux = $x + $y;
                $x=$y;
                $y=$aux;
              }
              echo $aux . ",";
           }
        }
        
        
        public function menor(){
          if(($this->a < $this->b) and ($this->a < $this->c ))
          {
            echo"<br><br>$this->a es el menor";
          }
          else{
            if(($this->b < $this->a) and ($this->b < $this->c ))
            {
              echo"<br><br>$this->b es el menor";
            }
            else{
              echo"<br><br>$this->c es el menor";
            }
          }
        }

        
        public function Piramide()
      {
      $caden=strlen("$this->cadena");
      $k=($caden/2)-1;
      for($j=1;$j<=$caden+1;$j++)
      { 
        echo '<center>'.substr("$this->cadena",$k,$j),"<br><br>".'</center>';
        if($k== -$k)
        {
          $k=0;
        }
        else
        {
          $k=$k-1;
        }
        $j=$j+1;
      }
    }
    }
?>