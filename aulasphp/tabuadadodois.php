<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Documento sem título</title>
    </head>
    <body>
		<?php
			$n = 2;
			echo "<h1>Tabuada do 2</h1>";
			echo "<h2>2 x 0 = 0</h2>";
			echo "<h2>2 x 1 = 2</h2>";
			echo "<h2>2 x $n = 4</h2>";
			echo "<h2>2 x 3 = 6</h2>";
			echo "<h2>2 x 4 = 8</h2>";
			echo "<h2>2 x 5 = 10</h2>";
			echo "<h2>2 x 6 = 12</h2>";
			echo "<h2>2 x 7 = 14</h2>";
			echo "<h2>2 x 8 = 16</h2>";
			echo "<h2>2 x 9 = 18</h2>";
			echo "<h2>2 x 10 = ". $n * 10 ."</h2>";
		?>
    </body>
</html>