<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Operadores Matemáticos</title>
    </head>
    <body>
		<h1>Operadores Matemáticos</h1>
		<?php
			$n1 = 7;
			$n2 = 5;
			$total = 0;
			
			echo "<h2>Soma</h2>";
			$total = $n1 + $n2;
			echo "<h3>$n1 + $n2 = $total</h3>";
			
			echo "<h2>Subtração</h2>";
			$total = $n1 - $n2;
			echo '<h3>$n1 - $n2 = '.$total.'</h3>';

			echo "<h2>Multiplicação</h2>";
			$total = $n1 * $n2;
			echo '<h3>'.$n1." * $n2 = $total</h3>";

			echo "<h2>Divisão</h2>";
			$total = (int)($n1 / $n2);
			echo '<h3>'.$n1." / $n2 = $total</h3>";
			$resto = $n1 % $n2;
			echo "<h3>Resto da divisão = $resto</h3>";
		?>
    </body>
</html>