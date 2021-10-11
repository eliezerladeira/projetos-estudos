<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Vetor</title>
    </head>
    <body>
		<?php
			$numeros = array();
			$numeros1 = array();
			
			for ($i = 1; $i <= 10; $i++)
			{
				if ($i % 2 == 0)
				{
					$numeros[] = $i;
				}
				else
				{
					$numeros1[] = $i;
				}
			}
			
			$i = 0;
			
			while ($i < 5)
			{
				echo "<h1>".$numeros[$i]."</h1>";
				$i++;
			}
			
			var_dump($numeros);
			echo "<p>";
			var_dump($numeros1);
			echo "<p>";
			
			// apaga um valor do vetor
			unset($numeros[2]);
			var_dump($numeros);
			echo "<p>";
			
			//indexando o valor dos índices dentro do array, depois de apagar o valor de um índice
			$numeros = array_values($numeros);
			var_dump($numeros);
		?>
    </body>
</html>