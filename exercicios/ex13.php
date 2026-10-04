<?php
function criptografarMensagem($texto, $deslocamento = 3)
{
	$resultado = "";
	$alfabeto = "abcdefghijklmnopqrstuvwxyz";

	for ($i = 0; $i < strlen($texto); $i++) {
		$letra = $texto[$i];
		$posicao = strpos($alfabeto, strtolower($letra));

		if ($posicao != false) {
			$novaLetra = $alfabeto[($posicao + $deslocamento) % 26];

			if ($letra == strtoupper($letra)) {
				$novaLetra = strtoupper($novaLetra);
			}

			$resultado .= $novaLetra;
		} else {
			$resultado .= $letra;
		}
	}

	return $resultado;
}

function descriptografarMensagem($texto, $deslocamento = 3)
{
	return criptografarMensagem($texto, 26 - ($deslocamento % 26));
}

$mensagem = "Besta fugana da febre do rato bexiga tapoca da mizera";
$criptografada = criptografarMensagem($mensagem);
echo "Original: " . $mensagem;
echo "<br>Criptografada: " . $criptografada;
echo "<br>Descriptografada: " . descriptografarMensagem($criptografada);
?>