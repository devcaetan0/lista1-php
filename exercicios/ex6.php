<?php
function converterTemperatura($valor, $origem, $destino)
{
	switch ($origem) {
		case "F":
			$celsius = ($valor - 32) * 5 / 9;
			break;
		case "K":
			$celsius = $valor - 273.15;
			break;
		case "C":
			$celsius = $valor;
			break;
	}

	switch ($destino) {
		case "F":
			return ($celsius * 9 / 5) + 32;
		case "K":
			return $celsius + 273.15;
		case "C":
			return $celsius;
	}
}

$temperaturaCoisada = 67;
$origem = "C";
$destino = "F";
$tempConvertida = converterTemperatura($temperaturaCoisada, $origem, $destino);

echo "Temperatura original: " . $temperaturaCoisada . "°" . $origem;
echo "<br>Temperatura convertida: " . $tempConvertida . "°" . $destino;
?>