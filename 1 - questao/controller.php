<?php

$valor1 = $_GET["valor1"];
$valor2 = $_GET["valor2"];

echo "Valor 1 informado: ".$valor1."<br>";
echo "Valor 2 informado: ".$valor2."<br>";

$soma = $valor1 + $valor2;

echo "Soma dos valores: ".$soma."<br>";

$novoValor = 0;

if ($soma > 20) {
    $novoValor = $soma + 8;
    echo "A soma dos valores eh maior que 20, entao iremos somar mais 8 e o novo resultado eh: ".$novoValor;
} else {
    $novoValor = $soma - 5;
    echo "A soma dos valores eh menor ou igual a 20, entao iremos subtrair  com 5 e o novo resultado eh: ".$novoValor;
}

?>