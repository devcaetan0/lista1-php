<?php
function inverterTexto($texto)
{
    $str_invertida = strrev($texto);
    $tamanho = strlen($texto);

    return "<br> Texto invertido: " . $str_invertida . "<br> Caracteres: " . $tamanho;
}

echo $texto_coisado = "Coco seco do Caio Leite";
echo inverterTexto($texto_coisado);
?>