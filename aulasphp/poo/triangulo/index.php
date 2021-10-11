<?php
	include "Triangulo.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title> Documento sem titulo</title>
	</head>
	
	<body>
		<?php
			$obj = new Triangulo2(10, 10, 10);
			/*$obj->a = 10;
			$obj->b = 20;
			$obj->c = 10;*/
			//$obj->SetA(10);
			//$obj->SetB(10);
			//$obj->SetC(10);
			
			$obj->VerificaSeEUmTriangulo();
		?>
	</body>
</html>