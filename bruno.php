<?php
/*
echo 'ola mundo!<br>';

echo 'sou o Bruno<br>';

$numero1 = 100;
$numero2 = 80;
$total = $numero1 + $numero2;
echo $total,'<br>';


if ($total >100){
	echo 'o valor total é maior que 100';

} else {
	echo 'o valor total é menor ou igual a 100';
}

echo '<br>';

$media = 7;
$faltas = 12;

if ($media >= 6 and $faltas <= 10 ){
	echo 'parabens vc passou de ano';
}else {
	echo 'infelizmente vc nao passou';
}

*/

$num=1;
$sai=2;

while($num <= 10){

	echo ' numero: ' . $num, '<br/>';
	if ($num>=$sai){
		break;
	}
	$num = $num +1;
}

?>