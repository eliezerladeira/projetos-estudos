<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tabuada</title>
    </head>
    <body>
		<?php
			var_dump($_POST);
			
			$n = $_POST["numero"];
			
			for ($i = 0; $i <= 10; $i++)
			{
				echo "<h1> $i x $n = ".($i * $n)."</h1>";
			}
		?>
    </body>
</html>