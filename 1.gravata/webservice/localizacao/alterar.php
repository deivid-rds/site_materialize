<?php

require_once '../../conexao/conecta.php';

// ALTERAR

// Exibe todos os erros PHP
error_reporting(-1);

if(isset($_POST['codigo'])){
    $codigo          = $_POST['codigo'];
    $local           = $_POST['local_editar'];
    $aproximadamente = $_POST['aprox_editar'];
    $km              = $_POST['km_editar'];

    $sql = "UPDATE localizacao_tb SET local='$local', aproximadamente='$aproximadamente', km='$km' where id_localizacao=$codigo";

    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        $resposta = ['sucesso' => 'Atualizado com sucesso.'];
        print json_encode($resposta);
        exit;
    } else {
        $resposta = ['erro' => 'Erro ao atualizar localização.'];
        print json_encode($resposta);
        exit;
    }
}