<?php
function inverterTexto($texto)
{
    return strrev($texto);
}

$texto = "Coco seco do Caio Leite";

echo "Texto original: " . $texto;
echo "<br>Texto invertido: " . inverterTexto($texto);
echo "<br>Quantidade de caracteres: " . strlen($texto);
?>