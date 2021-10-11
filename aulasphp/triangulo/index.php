<?php
	$a = 0;
	$b = 0;
	$c = 0;
	
	if (isset($_GET["ladoa"])) {
		$a = $_GET["ladoa"];
		$b = $_GET["ladob"];
		$c = $_GET["ladoc"];
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitionl//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Triangulo</title>
    </head>
    <body>
		<form id="form1" name="form1" method="post" action="triangulo.php">
			<p>
				<label for="ladoa">Lado A</label>
				<input type="text" name="ladoa" id="ladoa" value="<?php echo $a; ?>" />
			</p>
			<p>
				<label for="ladob">Lado B</label>
				<input type="text" name="ladob" id="ladob" value="<?php echo $b; ?>" />
			</p>
			<p>
				<label for="ladoc">Lado C</label>
				<input type="text" name="ladoc" id="ladoc" value="<?php echo $c; ?>" />
			</p>
			<p>
				<input type="submit" name="enviar" id="enviar" value="Enviar" />
			</p>
		</form>
    </body>
</html>