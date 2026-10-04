<?php
function calcularIMC($peso, $altura)
{
    return $peso / ($altura * $altura);
}

function validarEmail($email)
{
    return strpos($email, "@") != false && strpos($email, ".") !== false;
}

function gerarSenha($tamanho)
{
    $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%&*?";
    $senha = "";
    for ($i = 0; $i < $tamanho; $i++) {
        $senha .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }

    return $senha;
}

function contarVogais($texto)
{
    $texto = strtolower($texto);
    $quantidade = 0;

    for ($i = 0; $i < strlen($texto); $i++) {
        if (strpos("aeiou", $texto[$i]) !== false) {
            $quantidade++;
        }
    }

    return $quantidade;
}

function inverterTexto($texto)
{
    return strrev($texto);
}

function calcularIdade($dataNascimento)
{
    $anoNascimento = substr($dataNascimento, 0, 4);
    $anoAtual = date("Y");
    return $anoAtual - $anoNascimento;
}

function converterMoeda($valor, $cotacao)
{
    return $valor * $cotacao;
}

function formatarTelefone($telefone)
{
    if (strlen($telefone) === 11) {
        return "(" . substr($telefone, 0, 2) . ") " . substr($telefone, 2, 5) . "-" . substr($telefone, 7);
    }
    if (strlen($telefone) === 10) {
        return "(" . substr($telefone, 0, 2) . ") " . substr($telefone, 2, 4) . "-" . substr($telefone, 6);
    }
    return $telefone;
}

function gerarSaudacao($hora)
{
    if ($hora < 12)
        return "Bom dia comédia";
    if ($hora < 18)
        return "Boa tarde truta";
    return "Boa noite cachorro";
}

function validarSenhaForte($senha)
{
    return strlen($senha) >= 8;
}
?>