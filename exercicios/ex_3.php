<?php
function mascararCpf($cpf)
{
    $tamanho = strlen($cpf);
    $cpf = str_split($cpf);

    for ($i = 0; $i < ($tamanho - 4); $i++) {
        $cpf[$i] = "*";
    }

    $cpFormatado = implode("", $cpf);

    return $cpFormatado;
}

$cpfCoisado = "12345678910";

echo "O CPF é: " . $cpfCoisado;

echo "<br> CPF Formatado: " . mascararCpf($cpfCoisado);
?>