<?php

require_once '../../conexao/conecta.php';

// CADASTRAR

// Exibe todos os erros PHP
error_reporting(-1);

if(isset($_POST['nome_novo'])){
    $nome        = $_POST['nome_novo'];
    $fone        = $_POST['telefone_novo'];
    $email       = $_POST['email_novo'];
    $senha       = $_POST['senha_novo'];
    $rua         = $_POST['rua_novo'];
    $numero_casa = $_POST['numero_casa_novo'];
    $cidade      = $_POST['cidade_novo'];
    $estado      = $_POST['estado_novo'];
    $observacao  = $_POST['observacao_novo'];

    $sql = "INSERT INTO cliente_tb VALUES(0, '$nome', '$fone', '$email', '$senha', '$rua', '$numero_casa', '$cidade', '$estado', '$observacao')";

    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        $resposta = ['sucesso' => 'Cadastrado com sucesso.'];
        print json_encode($resposta);
        exit;
    } else {
        $resposta = ['erro' => 'Erro ao obter cliente.'];
        print json_encode($resposta);
        exit;
    }
}