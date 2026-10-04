<?php
include("desafio.php");

$produtos = [
    ["nome" => "Notebook", "quantidade" => 1, "valor_unitario" => 1200],
    ["nome" => "Mouse", "quantidade" => 2, "valor_unitario" => 80],
    ["nome" => "Teclado", "quantidade" => 1, "valor_unitario" => 150]
];

$relatorio = processarPedido($produtos);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Lista 1</title>
</head>

<body>
    <h1>PHP - Lista 1</h1>
    <ul>
        <li><a href="exercicios/ex1.php">Exercício 1</a></li>
        <li><a href="exercicios/ex2.php">Exercício 2</a></li>
        <li><a href="exercicios/ex3.php">Exercício 3</a></li>
        <li><a href="exercicios/ex4.php">Exercício 4</a></li>
        <li><a href="exercicios/ex5.php">Exercício 5</a></li>
        <li><a href="exercicios/ex6.php">Exercício 6</a></li>
        <li><a href="exercicios/ex7.php">Exercício 7</a></li>
        <li><a href="exercicios/ex8.php">Exercício 8</a></li>
        <li><a href="exercicios/ex9.php">Exercício 9</a></li>
        <li><a href="exercicios/ex10.php">Exercício 10</a></li>
        <li><a href="exercicios/ex11.php">Exercício 11</a></li>
        <li><a href="exercicios/ex12.php">Exercício 12</a></li>
        <li><a href="exercicios/ex13.php">Exercício 13</a></li>
        <li><a href="exercicios/ex14.php">Exercício 14</a></li>
        <li><a href="exercicios/ex15.php">Exercício 15</a></li>
    </ul>

    <div>
        <h2>DESAFIO</h2>
        <p>Produtos diferentes: <?= $relatorio["produtos_diferentes"] ?></p>
        <p>Itens comprados: <?= $relatorio["itens"] ?></p>
        <p>Produto mais caro: <?= $relatorio["produto_mais_caro"] ?></p>
        <p>Maior subtotal: <?= $relatorio["produto_maior_subtotal"]["nome"] ?> - R$
            <?= $relatorio["produto_maior_subtotal"]["subtotal"] ?>
        </p>

        <h3>Subtotal de cada produto</h3>
        <ul>
            <?php foreach ($relatorio["subtotais"] as $produto) {
                echo "<li>" . $produto["nome"] . ": R$ " . $produto["subtotal"] . "</li>";
            } ?>
        </ul>

        <p>Subtotal da compra: R$ <?= $relatorio["subtotal_compra"] ?></p>
        <p>Desconto: R$ <?= $relatorio["desconto"] ?></p>
        <p>Frete: R$ <?= $relatorio["frete"] ?></p>
        <p><strong>Valor final: R$ <?= $relatorio["valor_final"] ?></strong></p>
    </div>
</body>

</html>