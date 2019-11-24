<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Catálogo de produtos</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>

	<body>
		

		<div class="container">

			<div class="row">
				<h1>Detalhes do Produto</h1>
			</div>

			<div class="row">
				<div class="col-md-4"></div>

					<?php

						$id_produto = $_GET['id_produto'];

						$detalhes[1] = "Detalhe das cadeiras";
						$detalhes[2] = "Detalhe do fogão";
						$detalhes[3] = "Detalhe do roteador";
						$detalhes[4] = "Detalhe da tv";

						echo "<h2>$detalhes[$id_produto];</h2>"
					?>

			</div>

		</div>
	</body>
</html>