<?php
function inverterTexto($texto)
{
    $strInvertida = strrev($texto);
    $tamanho = strlen($texto);

    return "<br> Texto invertido: " . $strInvertida . "<br> Caracteres: " . $tamanho;
}

echo $texto_coisado = "Coco seco do Caio Leite";
echo inverterTexto($texto_coisado);
?>