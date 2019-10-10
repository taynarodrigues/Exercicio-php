<?php

$mes = $_GET["MES"];

$meses[1] = "Janeiro";
$meses[2] = "Fevereiro";
$meses[3] = "Marco";
$meses[4] = "Abril";
$meses[5] = "Maio";
$meses[6] = "Junho";
$meses[7] = "Julho";
$meses[8] = "Agosto";
$meses[9] = "Setembro";
$meses[10] = "Outubro";
$meses[11] = "Novembro";
$meses[12] = "Dezembro";

if( $mes <= 12 && $mes > 0) {
    echo "O mes que deseja eh ". $meses[$mes];
} else {
    echo "O valor informado para o mes nao existe.";
}

?>