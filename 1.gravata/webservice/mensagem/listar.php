<?php

require_once '../../conexao/conecta.php';

// LISTAR MENSAGEM

$sql = "SELECT * from mensagem_tb";

$resultado = mysqli_query($conexao, $sql);

if($resultado) {
    $lista_mensagem = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

    $lista = []; // inicializa uma lista vazia

    foreach ($lista_mensagem as $mensagem) {
        $lista[] = $mensagem;
    }

    $json = json_encode($lista);
    print $json;
    exit;
}