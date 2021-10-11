<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitionl//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Triangulo</title>
    </head>
    <body>
		<?php
			$ladoa = 0;
			$ladob = 0;
			$ladoc = 0;
			
			if (isset($_POST["enviar"])) {
				$ladoa = $_POST["ladoa"];
				$ladob = $_POST["ladob"];
				$ladoc = $_POST["ladoc"];
				
				echo "<h1>Valores informados:</h1>";
				echo "<h2>Lado A: $ladoa</h2>";
				echo "<h2>Lado B: $ladob</h2>";
				echo "<h2>Lado C: $ladoc</h2>";
				
				if (($ladoa + $ladob > $ladoc) && ($ladoa + $ladoc > $ladob) && ($ladoc + $ladob > $ladoa)) {
					echo "<h2>Os valores representam os lados de um triângulo</h2>";
				}
				else {
					echo "<h2>Os valores não representam os lados de um triângulo</h2>";
				}
			}
		?>
		<p><a href="index.php?ladoa=<?php echo $ladoa;?>&ladob=<?php echo $ladob;?>&ladoc=<?php echo $ladoc;?>">Triângulo</a></p>
    </body>
</html>