<?php
include("../funcoes.php");

echo "IMC: " . calcularIMC(70, 1.75);
echo "<br>E-mail válido: " . (validarEmail("aluno@email.com") ? "Sim" : "Não");
echo "<br>Vogais em 'Paralepipedo': " . contarVogais("Paralepipedo");
echo "<br>Texto invertido: " . inverterTexto("PHP");
echo "<br>Idade: " . calcularIdade("2000-01-01");
echo "<br>Moeda: " . converterMoeda(10, 5.00);
echo "<br>Telefone: " . formatarTelefone("11987654321");
echo "<br>Saudação: " . gerarSaudacao(14);
echo "<br>Senha forte: " . (validarSenhaForte("Senha123!") ? "Sim" : "Não");
echo "<br>Senha gerada: " . gerarSenha(12);
?>