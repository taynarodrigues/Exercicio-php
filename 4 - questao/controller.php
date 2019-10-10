<?php

$valor1 = $_GET["valor1"];
$valor2 = $_GET["valor2"];
$valor3 = $_GET["valor3"];


echo "Apresentando valores em ordenacao decrescente <br><br>";

if ($valor1 > $valor2 && $valor1 > $valor3) {
    if ($valor2 > $valor3) {
        echo "Valor: ".$valor1."<br>";
        echo "Valor: ".$valor2."<br>";
        echo "Valor: ".$valor3."<br>";
    } else {
        echo "Valor: ".$valor1."<br>";
        echo "Valor: ".$valor3."<br>";
        echo "Valor: ".$valor2."<br>";
    }
} elseif($valor2 > $valor1 && $valor2 > $valor3) {
    if ($valor1 > $valor3) {
        echo "Valor: ".$valor2."<br>";
        echo "Valor: ".$valor1."<br>";
        echo "Valor: ".$valor3."<br>";
    } else {
        echo "Valor: ".$valor2."<br>";
        echo "Valor: ".$valor3."<br>";
        echo "Valor: ".$valor1."<br>";
    }
} else {
    if ($valor1 > $valor2) {
        echo "Valor: ".$valor3."<br>";
        echo "Valor: ".$valor1."<br>";
        echo "Valor: ".$valor2."<br>";
    } else {
        echo "Valor: ".$valor3."<br>";
        echo "Valor: ".$valor2."<br>";
        echo "Valor: ".$valor1."<br>";
    }
}
    

?>