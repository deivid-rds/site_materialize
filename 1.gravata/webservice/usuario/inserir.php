<?php

require_once '../../conexao/conecta.php';

// CADASTRAR

// Exibe todos os erros PHP
error_reporting(-1);

if(isset($_POST['username_novo'])){
    $username = $_POST['username_novo'];
    $nome     = $_POST['nome_novo'];
    $senha    = $_POST['senha_novo'];
    $tipo     = $_POST['group1'];

    $sql = "INSERT INTO usuario_tb VALUES(0, '$username', '$nome', '$senha', '$tipo')";

    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        $resposta = ['sucesso' => 'Cadastrado com sucesso.'];
        print json_encode($resposta);
        exit;
    } else {
        $resposta = ['erro' => 'Erro ao obter usuário.'];
        print json_encode($resposta);
        exit;
    }
}