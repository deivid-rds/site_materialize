<?php

require_once '../../conexao/conecta.php';

// LISTAR

$sql = "SELECT * from galeria_tb";

$resultado = mysqli_query($conexao, $sql);

if($resultado) {
    $lista_galeria = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

    $lista = []; // inicializa uma lista vazia

    foreach ($lista_galeria as $galeria) {
        $galeria['url_completa'] = $url_base . '/imagem/' . $galeria['imagem'];
        $lista[] = $galeria;
    }

    $json = json_encode($lista);
    print $json;
    exit;
}