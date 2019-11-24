<?php

//classe mãe ou super classe
class Felino{

	var $mamifero = 'sim';

	function correr(){
		echo 'Correr como felino';
	}
}



//classe filha ou sub-classe
class Chita extends Felino{

	//Polimofirsmo
	function correr(){
		echo 'Correr como chita 100kn/h';
	}
}

$chita = new Chita();
echo $chita->mamifero . '<br>';
$chita->correr();

?>
