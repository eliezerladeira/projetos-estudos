<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tabuada</title>
    </head>
    <body>
		<h1><?php echo "Envio pelo metodo POST" ?></h1>
		<form id="form1" name="form1" method="post" action="tabuada.php">
			<label for="numero">Numero</label>
			<input type="text" name="numero" id="numero" value="2" />
			<input type="submit" name="Enviar" id="Enviar" value="Enviar" />
		</form>

		<!-- método GET envia as informaç?es via link de endereço no browser //-->
		<h1><?php echo "Envio pelo metodo GET" ?></h1>
		<form id="form1" name="form1" method="get" action="tabuada2.php">
			<label for="numero">Numero</label>
			<input type="text" name="numero" id="numero" value="2" />
			<input type="submit" name="Enviar" id="Enviar" value="Enviar" />
		</form>
		
		<h1><?php echo "Envio pelo metodo GET utilizando links" ?></h1>
		<p><a href="tabuada2.php?numero=2">Tabuada do 2</a></p>
		<p><a href="tabuada2.php?numero=3">Tabuada do 3</a></p>
		<p><a href="tabuada2.php?numero=4">Tabuada do 4</a></p>
		<p><a href="tabuada2.php?numero=5">Tabuada do 5</a></p>
		<p>...</p>
		<p><a href="tabuada2.php?numero=10">Tabuada do 10</a></p>
    </body>
</html>