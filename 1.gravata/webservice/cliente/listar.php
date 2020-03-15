<?php

require_once '../../conexao/conecta.php';

// LISTAR

$sql = "SELECT * from cliente_tb";

$resultado = mysqli_query($conexao, $sql);

if($resultado) {
    $lista_cliente = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

    $lista = []; // inicializa uma lista vazia

    foreach ($lista_cliente as $cliente) {
        $lista[] = $cliente;
    }

    $json = json_encode($lista);
    print $json;
    exit;
}