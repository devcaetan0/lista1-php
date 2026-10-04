<?php
function ordenarNomes($texto)
{
	$nomes = explode(",", $texto);
	sort($nomes);

	return $nomes;
}

$nomesCoisados = ordenarNomes("Lucas Onofore, Davi Batixta, John Richard, Caio Leite");
echo implode(", ", $nomesCoisados);
?>