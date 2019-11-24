<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Mensagens divertidas</title>
	</head>

	<body>

		<?php

		//int
		$valor_inteiro = 1500;

		//float
		$valor_fracionado = 10.7;

		//boolean
		$estado = true;

		//strings
		$texto = 'Curso PHP custa: ' . $valor_inteiro;
		//arrays

		echo $valor_inteiro,'<br/>', $valor_fracionado;
		echo $estado,'<br/>';
		echo $texto,'<br/>';

		?>
		
	</body>
</html>