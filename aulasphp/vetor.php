<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Vetor</title>
    </head>
    <body>
		<?php
			$vetor[0] = "Ola Mundo 0!";
			$vetor[1] = "Ola Mundo 1!";
			$vetor[2] = "Ola Mundo 2!";
			$vetor[3] = 10;
			$vetor[4] = 20;
			$i = 0;
			
			while ($i < 5) {
				echo "<h1>".$vetor[$i]."</h1>";
				$i++;
			}
			
			// verifica o tipo da variável
			var_dump($vetor);
			
			$vetor["oi"] = 5;
			$vetor["ola"] = 15;
			
			var_dump($vetor);
		?>
    </body>
</html>