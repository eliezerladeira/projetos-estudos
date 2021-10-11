<?php
	class Triangulo
	{
		// public - todos enxergam
		// private - apenas esta classe enxerga
		// protected - apenas esta classe e as classes que a herdam enxergam
		protected $a;
		protected $b;
		protected $c;
		
		function __construct($a = 0, $b = 0, $c = 0)
		{
			$this->a = $a;
			$this->b = $b;
			$this->c = $c;
		}
		
		public function GetA()
		{
			return($this->a);
		}
		
		public function SetA($v)
		{
			$this->a = $v;
		}

		public function GetB()
		{
			return($this->b);
		}
		
		public function SetB($v)
		{
			$this->b = $v;
		}

		public function GetC()
		{
			return($this->c);
		}
		
		public function SetC($v)
		{
			$this->c = $v;
		}
		
		public function VerificaSeEUmTriangulo()
		{
			$msg = "Não representa um triângulo!";
			
			if (($this->a < $this->b + $this->c) && ($this->b < $this->a + $this->c) && ($this->c < $this->a + $this->b)) {
				$msg = "Representa um triângulo!";
			}
			
			echo $msg;
		}
	}
	
	class Triangulo2 extends Triangulo
	{
		public function VerificaSeEUmTriangulo()
		{
			$msg = "Os valores informados não representam um triângulo!";
			
			if (($this->a < $this->b + $this->c) && ($this->b < $this->a + $this->c) && ($this->c < $this->a + $this->b)) {
				$msg = "Os valores representam um triângulo!";
			}
			
			echo $msg;
		}
	}
?>