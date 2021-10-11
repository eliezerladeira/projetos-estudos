<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitionl//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Tabuada</title>
    </head>
    <body>
		<?php
			// isset verifica se a variável foi iniciada, se tem valor
			if (isset($_GET["numero"])) {
				$n = $_GET["numero"];
				
				for ($i = 0; $i <= 10; $i++)
				{
					echo "<h1> $i x $n = ".($i * $n)."</h1>";
				}
			}
		?>
		<p><a href="formulario.php">Retornar ao formulário</a></p>
    </body>
</html>