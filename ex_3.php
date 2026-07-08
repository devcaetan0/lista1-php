<?php
function mascararCpf($cpf)
{
    $tamanho = strlen($cpf);
    $cpfSplit = str_split($cpf);

    for ($i = 0; $i < ($tamanho - 4); $i++) {
        $cpfSplit[$i] = "*";
    }

    $cpf_formatado = implode("", $cpfSplit);

    return $cpf_formatado;
}

$cpfCoisado = "12345678910";

echo "O CPF é: " . $cpfCoisado;

echo "<br> CPF Formatado: " . mascararCpf($cpfCoisado);
?>
