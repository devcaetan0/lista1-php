<?php
function gerarSenha($tamanho)
{
    $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+-=[]{}|;':,./<>?";
    $tamanhoChar = strlen($caracteres);
    $senhaAleatoria = "";

    for ($i = 0; $i < $tamanho; $i++) {
        $charAleatorio = random_int(0, $tamanhoChar);
        $senhaAleatoria .= $caracteres[$charAleatorio];
    }
    return $senhaAleatoria;
}

$quantCaracteres = 21;
$novaSenha = gerarSenha($quantCaracteres);

echo "Quantidade de caracteres: " . $quantCaracteres;
echo "<br> Senha gerada: " . $novaSenha;
?>
