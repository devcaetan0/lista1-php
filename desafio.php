<?php
function calcularSubtotal($produto)
{
    return $produto["quantidade"] * $produto["valor_unitario"];
}

function calcularTotal($subtotais)
{
    $total = 0;

    foreach ($subtotais as $produto) {
        $total = $total + $produto["subtotal"];
    }

    return $total;
}

function calcularDesconto($total)
{
    if ($total > 1000) {
        return $total * 0.15;
    }

    if ($total > 500) {
        return $total * 0.10;
    }

    return 0;
}

function calcularFrete($total)
{
    if ($total <= 300) {
        return 35;
    }

    if ($total <= 800) {
        return 20;
    }

    return 0;
}

function processarPedido($produtos)
{
    $subtotais = [];
    $quantidadeItens = 0;
    $produtoMaisCaro = $produtos[0];
    $produtoMaiorSubtotal = [
        "nome" => $produtos[0]["nome"],
        "subtotal" => calcularSubtotal($produtos[0])
    ];

    foreach ($produtos as $produto) {
        $subtotal = calcularSubtotal($produto);
        $subtotais[] = ["nome" => $produto["nome"], "subtotal" => $subtotal];
        $quantidadeItens = $quantidadeItens + $produto["quantidade"];

        if ($produto["valor_unitario"] > $produtoMaisCaro["valor_unitario"]) {
            $produtoMaisCaro = $produto;
        }

        if ($subtotal > $produtoMaiorSubtotal["subtotal"]) {
            $produtoMaiorSubtotal = ["nome" => $produto["nome"], "subtotal" => $subtotal];
        }
    }

    $total = calcularTotal($subtotais);
    $desconto = calcularDesconto($total);
    $frete = calcularFrete($total);

    return [
        "produtos_diferentes" => count($produtos),
        "itens" => $quantidadeItens,
        "produto_mais_caro" => $produtoMaisCaro["nome"],
        "produto_maior_subtotal" => $produtoMaiorSubtotal,
        "subtotais" => $subtotais,
        "subtotal_compra" => $total,
        "desconto" => $desconto,
        "frete" => $frete,
        "valor_final" => $total - $desconto + $frete
    ];
}
?>