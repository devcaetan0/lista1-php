<?php
function mascararCpf($cpf)
{
    $tamanho = strlen($cpf);
    $cpf_split = str_split($cpf);

    for ($i = 0; $i < ($tamanho - 4); $i++) {
        $cpf_split[$i] = "*";
    }

    $cpf_formatado = implode("", $cpf_split);

    return $cpf_formatado;
}

$cpf_coisado = "12345678910";

echo "O CPF é: " . $cpf_coisado;

echo mascararCpf($cpf_coisado);
?>
