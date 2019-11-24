<?php


class Veiculo{

	/* modificadores
	public = var, porém bom utilizar public aqui
	private
	protect
	*/

	public $placa='BAN-0928';
	private $cor = 'Preto';
	protected $tipo;
}

$veiculo = new Veiculo();
echo $veiculo->placa . '<br>';
$veiculo->placa = 'FRH-0165';
echo $veiculo->placa . '<br>';

//echo $veiculo->cor . '<br>';
//$veiculo->cor = 'azul';


class Veiculo2{

	/* modificadores
	public = var, porém bom utilizar public aqui
	private
	protect
	*/

	private $placa;
	private $cor;
	private $tipo;

	public function setPlaca($parametro_placa){
		//aqui vc poderia validar a placa: letras e numeros...
		$this->placa = $parametro_placa;
	}

	public function getPlaca(){
		return $this->placa;
	}

}

$veiculo = new Veiculo2();
$veiculo->setPlaca('FRH-8766');
echo $veiculo->getPlaca();
	

?>