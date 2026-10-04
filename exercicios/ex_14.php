<?php
function estatisticasNumericas($numeros)
{
	$quantidade = count($numeros);
	$soma = 0;
	$maior = $numeros[0];
	$menor = $numeros[0];
	$pares = 0;

	foreach ($numeros as $numero) {
		$soma = $soma + $numero;

		if ($numero > $maior) {
			$maior = $numero;
		}

		if ($numero < $menor) {
			$menor = $numero;
		}

		if ($numero % 2 == 0) {
			$pares++;
		}
	}

	$media = $soma / $quantidade;
	$ordenados = $numeros;
	sort($ordenados);
	$meio = ($quantidade / 2);

	if ($quantidade % 2 == 0) {
		$mediana = ($ordenados[$meio - 1] + $ordenados[$meio]) / 2;
	} else {
		$mediana = $ordenados[$meio];
	}

	return [
		"soma" => $soma,
		"media" => $media,
		"maior" => $maior,
		"menor" => $menor,
		"mediana" => $mediana,
		"pares" => $pares,
		"impares" => $quantidade - $pares
	];
}

$resultado = estatisticasNumericas([2, 5, 8, 1, 4]);

echo "Soma: " . $resultado["soma"];
echo "<br>Média: " . $resultado["media"];
echo "<br>Maior: " . $resultado["maior"];
echo "<br>Menor: " . $resultado["menor"];
echo "<br>Mediana: " . $resultado["mediana"];
echo "<br>Pares: " . $resultado["pares"];
echo "<br>Ímpares: " . $resultado["impares"];
?>