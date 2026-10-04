<?php
function analisarProdutos($produtos, $pesquisa)
{
	$maisCaro = $produtos[0];
	$maisBarato = $produtos[0];
	$somaPrecos = 0;
	$produtoEncontrado = "Produto não encontrado";

	foreach ($produtos as $produto) {
		if ($produto["preco"] > $maisCaro["preco"]) {
			$maisCaro = $produto;
		}

		if ($produto["preco"] < $maisBarato["preco"]) {
			$maisBarato = $produto;
		}

		$somaPrecos = $somaPrecos + $produto["preco"];

		if ($produto["nome"] == $pesquisa) {
			$produtoEncontrado = $produto["nome"];
		}
	}

	$media = $somaPrecos / count($produtos);

	return [
		"mais_caro" => $maisCaro,
		"mais_barato" => $maisBarato,
		"media" => $media,
		"pesquisa" => $produtoEncontrado
	];
}

$produtos = [
	["nome" => "Arroz", "preco" => 21.90],
	["nome" => "Feijão", "preco" => 67.22],
	["nome" => "Café", "preco" => 42.50]
];
$resultado = analisarProdutos($produtos, "Café");
echo "Mais caro: " . $resultado["mais_caro"]["nome"];
echo "<br>Mais barato: " . $resultado["mais_barato"]["nome"];
echo "<br>Média dos preços: R$ " . $resultado["media"];
echo "<br>Pesquisa: " . $resultado["pesquisa"];
?>