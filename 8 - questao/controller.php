<?php

$valor = $_GET["valor"];

$produto = 1;
for ($i = 1 ; $i <= $valor; $i++) {
    echo $i." ; ";
    $produto *= $i;
}

echo "<br>O produto eh: ".$produto;

?>