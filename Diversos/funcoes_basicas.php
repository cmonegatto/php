<?php

$valor = '';

//isset: não definida ou conteudo NULL
if (isset ($valor) ){
	echo 'Variável iniciada';
}


// empty: true-> '', 0, '0', false, null, array()
$valor = null;
if (empty($valor)){
	echo 'Variável vazia';
}


//is_numeric()
//Se é um numero ou uma string numérica
$valor = '90.7';
if (is_numeric($valor)){
	echo 'É um número';
}

?>