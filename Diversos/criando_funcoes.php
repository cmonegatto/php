<?php

function primeira_funcao($d=''){
	echo 'Curso de PHP ' . $d;
}

primeira_funcao(date('d-m-Y'));
echo '<br>';
primeira_funcao();

?>