<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laços de Repetição</title>
    </head>
    <body>
		<?php
			$i = 0;
			
			while ($i <= 10) {
				echo "<h1>Valor do i: $i</h1>";
				$i++;
			}
			
			$i = 0;
			$n = 2;
			for ($i = 0; $i <= 10; $i++) {
				echo "<h1>$i x $n = ".($i * $n)."</h1>";
			}
		?>
    </body>
</html>