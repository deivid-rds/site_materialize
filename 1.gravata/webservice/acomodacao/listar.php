<?php

require_once '../../conexao/conecta.php';

// LISTAR ACOMODAÇÃO

$sql = "SELECT * from acomodacao_tb";

$resultado = mysqli_query($conexao, $sql);

if($resultado) {
    $lista_acomodacao = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

    $lista = []; // inicializa uma lista vazia

    foreach ($lista_acomodacao as $acomodacao) {
        $acomodacao['url_completa'] = $url_base . '/imagem/' . $acomodacao['imagem'];
        $lista[] = $acomodacao;
    }

    $json = json_encode($lista);
    print $json;
    exit;
}