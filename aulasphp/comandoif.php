<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Comando if</title>
    </head>
    <body>
		<?php
			$n = 5;
			$resto = $n % 2;
			echo "<h1>Verifica se o número $n é par ou ímpar</h1>";
			
			if ($resto == 0) {
				echo "<h2>O número $n é PAR</h2>";
			} else {
				echo "<h2>O número $n é ÍMPAR</h2>";
			}
			
			//if ($resto != 0) {
			//	echo "<h2>O número $n é ÍMPAR</h2>";
			//}
		?>
    </body>
</html>