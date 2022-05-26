<?php

require_once '../../conexao/conecta.php';

// EXCLUIR

$deletar = isset($_POST['deletar']) ? $_POST['deletar'] : '';
$id      = isset($_POST['id'])      ? $_POST['id'] :       '';

if($deletar){
    $sql = "DELETE FROM acomodacao_tb WHERE id_quarto=$id";
    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        print 'sucesso';
        die;
    }else{
        $error = mysqli_error($conexao);
        if(strpos($error, 'foreign key constraint')){
            print('Não é possível excluir esse registro pois ele está vinculado a outro(s) registro(s).');
            die;
        }
        print 'erro: ' . $sql;
        die;
    }
}