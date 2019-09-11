<?php
class pila
{
	private $elemento=array();
	private $tope;
	function __construct()
	{
		$this->tope=0;
	}
	public function insertar($elemento)
	{
		$this->elemento[$this->tope]=$elemento;
		$this->tope++;
	}
	public function eliminar()
	{
		if ($this->tope==0)
			echo"La pila esta vacia";
		else
		{
			$this->tope--;
				return $this->elemento[$this->tope];
		}
	}
	public function mostrar()
	{
		for($i=0;$i<$this->tope;$i++)
			echo $this->elemento[$i]."<br/>";
	}
}