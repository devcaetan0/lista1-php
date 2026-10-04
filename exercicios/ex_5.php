<?php
function analisarTexto($texto)
{
	$palavras = 0;
	$caracteres = 0;
	$vogais = 0;
	$consoantes = 0;
	$dentroDaPalavra = false;
	$texto = strtolower($texto);

	foreach (str_split($texto) as $caractere) {
		$caracteres++;

		if ($caractere === " ") {
			$dentroDaPalavra = false;
		} elseif (!$dentroDaPalavra) {
			$palavras++;
			$dentroDaPalavra = true;
		}

		if (strpos("aeiou", $caractere) !== false) {
			$vogais++;
		} elseif (strpos("bcdfghjklmnpqrstvwxyzç", $caractere) !== false) {
			$consoantes++;
		}
	}

	return [
		"palavras" => $palavras,
		"caracteres" => $caracteres,
		"vogais" => $vogais,
		"consoantes" => $consoantes
	];
}

$textoCoisado = "Este texto tem algumas palavras.";
$resultado = analisarTexto($textoCoisado);

echo "Texto: " . $textoCoisado;
echo "<br>Palavras: " . $resultado["palavras"];
echo "<br>Caracteres: " . $resultado["caracteres"];
echo "<br>Vogais: " . $resultado["vogais"];
echo "<br>Consoantes: " . $resultado["consoantes"];
?>