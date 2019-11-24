<?php


class Pessoa{
	//atributos
	var $nome;

	//metodos - conhecido como getters e setters
	function setNome($nome_definido){
		$this->nome = $nome_definido;
	}

	function getNome(){
		return $this->nome;
	}

}

// instanciar a classe
$pessoa = new Pessoa();

$pessoa->setNome('Claudio');
echo $pessoa->getNome();


?>