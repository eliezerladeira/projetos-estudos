<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitionl//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Salário Líquido</title>
    </head>
    <body>
		<?php
			$qhoras = 0;
			$vhoras = 0;
			$desconto = 0;
			$pdesconto = 0;
			$sbruto = 0;
			$sliquido = 0;
			
			if (isset($_POST["Enviar"])) {
				$qhoras = $_POST["qtdhora"];
				$vhoras = $_POST["vhoras"];
				$pdesconto = $_POST["desconto"];
				
				$sbruto = $qhoras * $vhoras;
				$desconto = ($sbruto * $pdesconto) / 100;
				$sliquido = $sbruto - $desconto;
				?>
				<h2>Quantidade de horas trabalhadas: <?php echo $qhoras ?></h2>
				<h2>Valor das horas trabalhadas: <?php echo $vhoras ?></h2>
				<h2>Percentual de desconto: <?php echo $pdesconto ?></h2>
				<h2>Salário Bruto: <?php echo $sbruto ?></h2>
				<h2>Desconto: <?php echo $desconto ?></h2>
				<h2>Salário Líquido: <?php echo $sliquido ?></h2>
				<a href="index.php?vh=<?php echo $vhoras;?>&qh=<?php echo $qhoras;?>&pd=<?php echo $pdesconto;?>Voltar</a>
				<?php
			} else {
				?>
				<a href="index.php">Informe os valores na página principal</a>
				<?php
			}
		?>
    </body>
</html>