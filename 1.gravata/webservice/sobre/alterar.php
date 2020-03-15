<?php

require_once '../../conexao/conecta.php';

// ALTERAR

// Exibe todos os erros PHP
error_reporting(-1);

if(isset($_POST['titulo_novo'])){
    $titulo    = $_POST['titulo_novo'];
    $descricao = $_POST['descricao_novo'];

    $sql = "UPDATE sobre_tb SET titulo='$titulo', descricao='$descricao' where id_sobre=$codigo";

    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        $resposta = ['sucesso' => 'Atualizado com sucesso.'];
        print json_encode($resposta);
        exit;
    } else {
        $resposta = ['erro' => 'Erro ao atualizar.'];
        print json_encode($resposta);
        exit;
    }
}