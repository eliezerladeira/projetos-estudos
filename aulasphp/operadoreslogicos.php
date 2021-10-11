<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Operadores Lógicos</title>
    </head>
    <body>
		<?php
			$n1 = 5;
			$n2 = 7;
			$n3 = 6;
			
			if ($n1 == $n2) {
					echo "<h2>O número $n1 é igual ao número $n2</h2>";
			}
			if ($n1 < $n2) {
					echo "<h2>O número $n1 é menor do que o número $n2</h2>";
			}
			if ($n1 <= $n2) {
					echo "<h2>O número $n1 é menor ou igual ao número $n2</h2>";
			}
			if ($n1 > $n2) {
					echo "<h2>O número $n1 é maior do que o número $n2</h2>";
			}
			if ($n1 >= $n2) {
					echo "<h2>O número $n1 é maior ou igual ao número $n2</h2>";
			}
			if ($n1 != $n2) {
					echo "<h2>O número $n1 é diferente do número $n2</h2>";
			}
			if (($n1 == $n2) && ($n1 > 10)) {
					echo "<h2>== e ></h2>";
			}
			if (($n1 == $n2) or ($n1 > 10)) {
					echo "<h2>== ou ></h2>";
			}
			
			if (($n1 + $n2 > $n3) && ($n3 + $n2 > $n1) && ($n1 + $n3 > $n2)) {
				echo "<h1>Os valores representam os lados de um triângulo.</h1>";
			} else {
				echo "<h1>Os valores não representam os lados de um triângulo.</h1>";
			}
			
			if (($n1 > 5) || ($n2 > 5) || ($n3 > 5)) {
				echo "<h1>Existe pelo menos um valor maior que o número 5.</h1>";
			}
		?>
    </body>
</html>