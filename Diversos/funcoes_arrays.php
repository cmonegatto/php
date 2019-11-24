<?php

/*
is_array - verifica se uma variável é um array
in_array - verifica se um valor existe em um array
array_keys - retorna todas as chaves de um array

sort - ordena um array
asort - ordena um array, mantendo indice/valor
count - conta elementos de um array

array_merge  -  funde um ou mais arrays
explode - divide uma string baseado em um delimitador
implode - junta elementos em um array
*/

//is_array
$array = array();
$retorno = is_array($array);

if ($retorno){
	echo "Verdadeiro";
}else{
	echo "Falso";
}
echo '<br>';

//in_array
$array = array('mac','linux','windows');
$retorno = in_array('linux',$array);

if ($retorno){
	echo "Verdadeiro";
}else{
	echo "Falso";
}
echo '<br>';

//array_keys
$produtos = array(10=>'notebook', 11=>'teclado');
$chaves_array = array_keys($produtos);

var_export($chaves_array);
echo '<br>';

//var_export
$frutas = array(0=>'Banana', 1=>'Amora', 2=>'Carambola');
var_export($frutas);
echo '<br>';

//sort
sort($frutas);
var_export($frutas);
echo '<br>';

//asort
$frutas = array(0=>'Banana', 1=>'Amora', 2=>'Carambola');
asort($frutas);
var_export($frutas);
echo '<br>';

//count
echo count($frutas);
echo '<br>';


//array_merge
$array1 = array('mac','linux');
$array2 = array('windows');
$array3 = array('solaris');

$novo_array = array_merge($array1,$array2,$array3);
var_export($novo_array);
echo '<br>';

//explode
$string = "20/10/2020";
$retorno = explode("/", $string);

var_export($retorno);
echo '<br>';

//implode
$nova_string = implode("-",$retorno);
echo $nova_string;



?>
