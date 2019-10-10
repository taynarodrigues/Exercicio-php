<?php

$valor[0] = $_GET["valor1"];
$valor[1] = $_GET["valor2"];
$valor[2] = $_GET["valor3"];
$valor[3] = $_GET["valor4"];
$valor[4] = $_GET["valor5"];
$valor[5] = $_GET["valor6"];
$valor[6] = $_GET["valor7"];
$valor[7] = $_GET["valor8"];
$valor[8] = $_GET["valor9"];
$valor[9] = $_GET["valor10"];
$valor[10] = $_GET["valor11"];
$valor[11] = $_GET["valor12"];
$valor[12] = $_GET["valor13"];
$valor[13] = $_GET["valor14"];
$valor[14] = $_GET["valor15"];
$valor[15] = $_GET["valor16"];
$valor[16] = $_GET["valor17"];
$valor[17] = $_GET["valor18"];
$valor[18] = $_GET["valor19"];
$valor[19] = $_GET["valor20"];

$somaPositivos = 0;
$somaNegativos = 0;
$qtdeNegativos = 0;
$qtdePositivos = 0;

for ($i = 0 ; $i < 20; $i++) {
    if($valor[$i] >= 0){
        $qtdePositivos++;
        $somaPositivos += $valor[$i];
    } else {
        $qtdeNegativos++;
        $somaNegativos += $valor[$i];
    }
}

echo "Soma dos valores Positivos: ".$somaPositivos."<br>";
echo "Soma dos valores Negativos: ".$somaNegativos."<br>";
echo "Quantidade de Positivos: ".$qtdePositivos."<br>";
echo "Quantidade de Negativos: ".$qtdeNegativos."<br>";


?>