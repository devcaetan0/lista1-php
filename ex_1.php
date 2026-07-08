<?php
function calcularFormula($x, $y)
{
    if (($x + $y) == 0) return "Não é possível dividir!";

    $resultado = ((pow($x, 2) + pow($y, 2)) / ($x + $y));

    return $resultado;
}

$xCoisado = 21;
$yCoisado = 67;

echo "O valor de X é " . $xCoisado;
echo "<br> O valor de Y é " . $yCoisado;
echo "<br> Resultado = " . calcularFormula($xCoisado, $yCoisado);
?>