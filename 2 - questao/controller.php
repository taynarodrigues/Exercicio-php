<?php

$valor1 = $_GET["valor1"];

echo "Valor 1 informado: ".$valor1."<br>";

$div10 = $valor1 % 10;
$div5 = $valor1 % 5;
$div2 = $valor1 % 2;

echo $div10 == 0 ? "Eh divisivel por 10 <br>" : "Nao eh divisivel por 10 <br>";
echo $div5 == 0 ? "Eh divisivel por 5 <br>" : "Nao eh divisivel por 5 <br>";
echo $div2 == 0 ? "Eh divisivel por 2 <br>" : "Nao eh divisivel por 2 <br>";

if ($div10 != 0 && $div5 != 0 && $div2 != 0)
    echo "O numero fornecido nao eh divisivel por 10, 5 e 2."

?>