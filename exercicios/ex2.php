<?php
function inverterTexto($texto)
{
    return strrev($texto);
}

$textoCoisado = "Coco seco do Caio Leite";

echo "Texto original: " . $textoCoisado;
echo "<br>Texto invertido: " . inverterTexto($textoCoisado);
echo "<br>Quantidade de caracteres: " . strlen($textoCoisado);
?>