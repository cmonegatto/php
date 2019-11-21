<?php

/*
strtolower - passar para minusculo
strtoupper - passar para maiúsculo
ucfirst - primeira letra caixa alta

strlen - contar caracteres de uma string
str_replace - encontrar e substituir em uma string
substr - retorna parte de uma string
*/

$texto = 'Olá Mundo, tudo certo aí?, curso de PHP<br>';

echo strtolower($texto);
echo strtoupper($texto);
echo ucfirst(strtolower($texto));

echo 'quantidade de caracteres é: ' . strlen($texto);
echo '<br>';

$texto = "345.332.456-0";
$cpf = str_replace(".", "", $texto);
$cpf = str_replace("-", "", $cpf);
echo $cpf;
echo '<br>';

$texto="Entenda porque seu smatphone esquenta tanto, xxx";

echo substr($texto, 5, 5);

?>