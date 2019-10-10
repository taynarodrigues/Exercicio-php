<?php

$usuario = $_GET["usuario"];
$livro = $_GET["livro"];

if( $usuario == 'p') {
    echo "Voce pode emprestar o livro ". $livro. " por 10 dias";
} else {
    echo "Voce pode emprestar o livro ". $livro. " por 3 dias";
}

?>