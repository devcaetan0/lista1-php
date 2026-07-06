<?php
function calcularFormula($x, $y)
{
    if (($x + $y) == 0) return "Não é possível dividir!";

    $resultado = ((pow($x, 2) + pow($y, 2)) / ($x + $y));

    return $resultado;
}

$x_coisado = 21;
$y_coisado = 67;

echo "O valor de X é " . $x_coisado;
echo "<br> O valor de Y é " . $y_coisado;
echo "<br> Resultado = " . calcularFormula($x_coisado, $y_coisado);
?>