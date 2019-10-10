<?php

$nome = $_GET["nome"];
$sexo = $_GET["sexo"];
$idade = $_GET["idade"];

echo "Nome informado: ".$nome."<br>";
echo "Sexo informado: ".$sexo."<br>";
echo "Idade informado: ".$idade."<br><br>";

echo "MENSAGEM<br>";

if ($sexo == "F" && $idade < 25){
    echo $nome.", Aceita!!!";
} else {
    echo $nome.", Nao aceita!!!";
}
    

?>