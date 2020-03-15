<?php

require_once '../conexao/conecta.php';

if(isset($_POST['username']) && isset($_POST['senha']))
{
    $user = $_POST['username'];
    $senha = $_POST['senha'];

    $sql = "SELECT id_usuario, username, nome, tipo FROM usuario_tb WHERE username='$user' and senha='$senha'";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado)
    {
        $usuario = mysqli_fetch_assoc($resultado);

        if($usuario) // login funcionou
        {
            print json_encode($usuario);
            exit;
        }
        else    // erro
        {
            $resposta = ['erro' => 'Usuário ou senha inválidos.'];
            print json_encode($resposta);
            exit;
        }

        var_dump($usuario);
    }
    else    // Se houver erro
    {
        //Respondendo em formato JSON
        $resposta = '{ "erro": "Desculpe, ocorreu um erro." }';
        print $resposta;
        exit;
    }

    exit;
}