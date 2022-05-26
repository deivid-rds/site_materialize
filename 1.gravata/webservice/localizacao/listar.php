<?php

require_once '../../conexao/conecta.php';

// LISTAR

$sql = "SELECT * from localizacao_tb";

$resultado = mysqli_query($conexao, $sql);

if($resultado) {
    $lista_localizacao = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

    $lista = []; // inicializa uma lista vazia

    foreach ($lista_localizacao as $localizacao) {
        $lista[] = $localizacao;
    }

    $json = json_encode($lista);
    print $json;
    exit;
}