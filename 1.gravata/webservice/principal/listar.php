<?php

require_once '../../conexao/conecta.php';

// LISTAR

$sql = "SELECT * from principal_tb";

$resultado = mysqli_query($conexao, $sql);

if($resultado) {
    $lista_principal = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

    $lista = []; // inicializa uma lista vazia

    foreach ($lista_principal as $principal) {
        $principal['url_completa'] = $url_base . '/imagem/' . $principal['imagem'];
        $lista[] = $principal;
    }

    $json = json_encode($lista);
    print $json;
    exit;
}