<?php

require_once '../../conexao/conecta.php';

// ALTERAR

// Exibe todos os erros PHP
error_reporting(-1);

if(isset($_POST['codigo'])){
    $titulo    = $_POST['titulo_editar'];
    $descricao = $_POST['descricao_editar'];

    $imagem = $_FILES['imagem_editar'] ?? null;

    // Se existir imagem
    if ($imagem) {
        if ($imagem['name']) { // Se existir nome da imagem
            $nome = $imagem['name'];

            //separa é um array de uma strig que está separado por um ponto (.)
            $separa = explode('.', $imagem['name']); // Obtém o tipo do arquivo

            //O separa[0] é o nome da imagem
            //O separa[1] é a extensão
            $ext    = $separa[1];
            $nome = md5(time()) . ".$ext"; // Cria um novo nome para evitar sobreescrever arquivos com nomes iguais
            $novo = '../../imagem/' . $nome; // Caminho completo
            move_uploaded_file($imagem["tmp_name"], $novo); // Move o arquivo carregado para o lugar desejado
        } else {
            $nome = '';
        }
    } else {
        $nome = '';
    }

    $sql = "UPDATE galeria_tb SET titulo='$titulo', descricao='$descricao', imagem='$nome' where id_galeria=$codigo";

    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        $resposta = ['sucesso' => 'Atualizado com sucesso.'];
        print json_encode($resposta);
        exit;
    } else {
        $resposta = ['erro' => 'Erro ao atualizar galeria.'];
        print json_encode($resposta);
        exit;
    }
}