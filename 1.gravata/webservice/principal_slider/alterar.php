<?php

require_once '../../conexao/conecta.php';

// ALTERAR

// Exibe todos os erros PHP
error_reporting(-1);

if(isset($_POST['codigo_slider'])){
    $codigo    = $_POST['codigo_slider'];
    $titulo    = $_POST['titulo_editar_slider'];
    $descricao = $_POST['descricao_editar_slider'];

    $imagem_editar = $_FILES['imagem_editar_slider'] ?? null;

    // Se existir imagem
    if ($imagem_editar) {
        if ($imagem_editar['name']) { // Se existir nome da imagem
            $nome = $imagem_editar['name'];

            //separa é um array de uma strig que está separado por um ponto (.)
            $separa = explode('.', $imagem_editar['name']); // Obtém o tipo do arquivo

            //O separa[0] é o nome da imagem
            //O separa[1] é a extensão
            $ext    = $separa[1];
            $nome = md5(time()) . ".$ext"; // Cria um novo nome para evitar sobreescrever arquivos com nomes iguais
            $novo = '../../imagem/' . $nome; // Caminho completo
            move_uploaded_file($imagem_editar["tmp_name"], $novo); // Move o arquivo carregado para o lugar desejado
        } else {
            $nome = '';
        }
    } else {
        $nome = '';
    }

    $sql = "UPDATE principal_slider_tb SET titulo_slider='$titulo', descricao_slider='$descricao', imagem_slider='$nome' where id_principal_slider=$codigo";

    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        $resposta = ['sucesso' => 'Atualizado com sucesso.'];
        print json_encode($resposta);
        exit;
    } else {
        $resposta = ['erro' => 'Erro ao atualizar slider.'];
        print json_encode($resposta);
        exit;
    }
}