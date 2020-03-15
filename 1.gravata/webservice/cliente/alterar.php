<?php

require_once '../../conexao/conecta.php';

// ALTERAR

// Exibe todos os erros PHP
error_reporting(-1);

if(isset($_POST['codigo'])){
    $codigo      = $_POST['codigo'];
    $nome        = $_POST['nome_edt'];
    $fone        = $_POST['telefone_edt'];
    $email       = $_POST['email_edt'];
    $senha       = $_POST['senha_edt'];
    $rua         = $_POST['rua_edt'];
    $numero_casa = $_POST['numero_casa_edt'];
    $cidade      = $_POST['cidade_edt'];
    $estado      = $_POST['estado_edt'];
    $observacao  = $_POST['observacao_edt'];

    $sql = "UPDATE cliente_tb SET nome='$nome', telefone='$fone', email='$email', senha='$senha', rua='$rua', numero_casa='$numero_casa', cidade='$cidade', estado='$estado', observacao='$observacao' where id_cliente=$codigo";

    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        $resposta = ['sucesso' => 'Atualizado com sucesso.'];
        print json_encode($resposta);
        exit;
    } else {
        $resposta = ['erro' => 'Erro ao atualizar cliente.'];
        print json_encode($resposta);
        exit;
    }
}