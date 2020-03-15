<?php

require_once '../../conexao/conecta.php';

// CADASTRAR

// Exibe todos os erros PHP
error_reporting(-1);

if(isset($_POST['local_novo'])){
    $local           = $_POST['local_novo'];
    $aproximadamente = $_POST['aprox_novo'];
    $km              = $_POST['km_novo'];

    $sql = "INSERT INTO localizacao_tb VALUES(0, '$local', '$aproximadamente', '$km')";

    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        $resposta = ['sucesso' => 'Cadastrado com sucesso.'];
        print json_encode($resposta);
        exit;
    } else {
        $resposta = ['erro' => 'Erro ao obter localização.'];
        print json_encode($resposta);
        exit;
    }
}