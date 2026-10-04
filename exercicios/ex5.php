<?php
function analisarTexto($texto)
{
	$palavras = 0;
	$caracteres = 0;
	$vogais = 0;
	$consoantes = 0;
	$dentroDaPalavra = false;
	$texto = str_split(strtolower($texto));

	foreach ($texto as $caractere) {
		$caracteres++;

		if ($caractere == " ") {
			$dentroDaPalavra = false;
		} else if (!$dentroDaPalavra) {
			$palavras++;
			$dentroDaPalavra = true;
		}

		if (strpos("aeiou", $caractere) != false) {
			$vogais++;
		} else if (strpos("bcdfghjklmnpqrstvwxyz", $caractere) != false) {
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

$textoCoisado = "Beto Carrero me fez vomitar na roupa";
$resultado = analisarTexto($textoCoisado);

echo "Texto: " . $textoCoisado;
echo "<br>Palavras: " . $resultado["palavras"];
echo "<br>Caracteres: " . $resultado["caracteres"];
echo "<br>Vogais: " . $resultado["vogais"];
echo "<br>Consoantes: " . $resultado["consoantes"];
?>