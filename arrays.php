<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Mensagens divertidas</title>
	</head>

	<body>

		<?php

		//arrays
		$msg[1] = 'teste 1';
		$msg[2] = 'teste 2';
		$msg[3] = 'teste 3';
		$msg[4] = 'teste 4';
		$msg[5] = 'teste 5';

		var_dump($msg);
		echo '<br/>';
		print_r($msg);

		for ($x = 1; $x <= 5; $x++) {
    		echo "$msg[$x] <br>";
		}

		?>
		
	</body>
</html>