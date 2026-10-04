<?php
function calcularDesconto($valor)
{
	if ($valor > 1000)
		$porcentagem = 30;
	else if ($valor > 500)
		$porcentagem = 20;
	else if ($valor > 100)
		$porcentagem = 10;
	else
		$porcentagem = 0;

	$desconto = $valor * $porcentagem / 100;

	return [
		"original" => $valor,
		"desconto" => $desconto,
		"final" => $valor - $desconto
	];
}

$valorCoisado = calcularDesconto(6767);
echo "Valor original: R$ " . $valorCoisado["original"];
echo "<br>Desconto: R$ " . $valorCoisado["desconto"];
echo "<br>Valor final: R$ " . $valorCoisado["final"];
?>