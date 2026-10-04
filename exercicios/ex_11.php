<?php
function formatarTexto($texto)
{
	$maiusculo = strtoupper($texto);
	$minusculo = strtolower($texto);
	$titulo = ucwords(strtolower($texto));
	$caracteres = strlen($texto);

	return [
		"maiusculas" => $maiusculo,
		"minusculas" => $minusculo,
		"titulo" => $titulo,
		"caracteres" => $caracteres
	];
}

$resultado = formatarTexto("Davi Batixta o caba mais arretado do SESI SENAI");
echo "Maiúsculas: " . $resultado["maiusculas"];
echo "<br>Minúsculas: " . $resultado["minusculas"];
echo "<br>Título: " . $resultado["titulo"];
echo "<br>Caracteres: " . $resultado["caracteres"];
?>