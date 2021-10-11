<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title> Documento sem titulo</title>
	</head>
	
	<body>
	<?php
		function exibeMSG($msg)
		{
			echo $msg;
		}
		
		function Somar($n1, $n2)
		{
			$t = $n1 + $n2;
			return($t);
		}
		
		function Incrementar(&$n) // passagem de valor por referência
		{
			$n++;
		}
		
		$i = 0;
		Incrementar($i);
		echo $i;
		
		// exibeMSG("Teste");
		// $r = Somar(10, 20);
		// echo $r;
	?>
	</body>
</html>