<?php
function calcularMedia($notas)
{
	$media = array_sum($notas) / count($notas);
	if ($media >= 7)
		$situacao = "Aprovado";
	else if ($media >= 5)
		$situacao = "Recuperação";
	else
		$situacao = "Reprovado";

	return [
		"maior" => max($notas),
		"menor" => min($notas),
		"media" => $media,
		"situacao" => $situacao
	];
}

$resultado = calcularMedia([8, 6, 9, 7]);
echo "Maior nota: " . $resultado["maior"];
echo "<br>Menor nota: " . $resultado["menor"];
echo "<br>Média: " . $resultado["media"];
echo "<br>Situação: " . $resultado["situacao"];
?>