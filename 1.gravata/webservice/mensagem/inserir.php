<?php

require_once '../../conexao/conecta.php';

// CADASTRAR MENSAGEM

// Exibe todos os erros PHP
error_reporting(-1);

if(isset($_POST['nome'])){
    $nome_cli = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO mensagem_tb VALUES(0, '$nome_cli', '$telefone', '', '$mensagem')";

    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        $resposta = ['sucesso' => 'Enviado com sucesso.'];
        print json_encode($resposta);
        exit;
    } else {
        $resposta = ['erro' => 'Erro ao obter mensagem.'];
        print json_encode($resposta);
        exit;
    }
}