<?php

require_once '../../conexao/conecta.php';

// LISTAR

$sql = "SELECT * from usuario_tb";

$resultado = mysqli_query($conexao, $sql);

if($resultado) {
    $lista_usuario = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

    $lista = []; // inicializa uma lista vazia

    foreach ($lista_usuario as $usuario) {
        $lista[] = $usuario;
    }

    $json = json_encode($lista);
    print $json;
    exit;
}