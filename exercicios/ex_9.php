<?php
function analisarNumero($numero)
{
	$paridade = ($numero % 2 == 0) ? "Par" : "Ímpar";
	$primo = $numero > 1;

	for ($i = 2; $i < $numero; $i++) {
		if ($numero % $i == 0) {
			$primo = false;
			break;
		}
	}

	$somaDivisores = 0;
	for ($i = 1; $i < $numero; $i++) {
		if ($numero > 0 && $numero % $i === 0)
			$somaDivisores += $i;
	}

	return [
		"paridade" => $paridade,
		"primo" => $primo ? "Primo" : "Não primo",
		"perfeito" => ($numero > 0 && $somaDivisores == $numero) ? "Perfeito" : "Não perfeito"
	];
}

$numero = 21;

$resultado = analisarNumero($numero);

echo "Número: 28";
echo "<br>" . $resultado["paridade"];
echo "<br>" . $resultado["primo"];
echo "<br>" . $resultado["perfeito"];
?>