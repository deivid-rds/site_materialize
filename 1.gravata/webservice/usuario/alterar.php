<?php

require_once '../../conexao/conecta.php';

// ALTERAR

// Exibe todos os erros PHP
error_reporting(-1);

if(isset($_POST['codigo'])){
    $codigo   = $_POST['codigo'];
    $username = $_POST['username_editar'];
    $nome     = $_POST['nome_editar'];
    $senha    = $_POST['senha_editar'];
    $tipo     = $_POST['group1'];



    $sql = "UPDATE usuario_tb SET username='$username', nome='$nome', senha='$senha', tipo='$tipo' where id_usuario=$codigo";

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