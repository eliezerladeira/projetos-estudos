<?php
	session_start();
	
	$v1 = $_POST["valor1"];
	$v2 = $_POST["valor2"];
	$v3 = $_POST["valor3"];
	
	$_SESSION["valor1"] = $v1;
	$_SESSION["valor2"] = $v2;
	$_SESSION["valor3"] = $v3;
	
	setcookie("valor1", $v1, time()+60*60*24*30); // 30 dias
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title> Documento sem titulo</title>
	</head>
	
	<body>
		<a href="sessao2.php">Ir para a página sessão 2</a>
		<a href="index.html">Ir para a página principal</a>
	</body>
</html>