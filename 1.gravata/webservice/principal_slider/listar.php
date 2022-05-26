<?php

require_once '../../conexao/conecta.php';

// LISTAR

$sql = "SELECT * from principal_slider_tb";

$resultado = mysqli_query($conexao, $sql);

if($resultado) {
    $lista_principal_slider = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

    $lista = []; // inicializa uma lista vazia

    foreach ($lista_principal_slider as $principal_slider) {
        $principal_slider['url_completa'] = $url_base . '/imagem/' . $principal_slider['imagem_slider'];
        $lista[] = $principal_slider;
    }

    $json = json_encode($lista);
    print $json;
    exit;
}