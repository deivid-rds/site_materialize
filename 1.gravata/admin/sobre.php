<?php

require_once '../conexao/conecta.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="../css/materialize.css">

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Funções JavaScript -->
    <script src="../js/configuracoes.js"></script>
    <script src="../js/sobre/funcoes.js"></script>
    <script src="../js/funcoes.js"></script>    <!-- Botão Sair -->

    <!-- Conferir se usuário está logado -->
    <script src="../js/logado.js"></script>

    <title>Gravatá - Sobre</title>
</head>

<body>

    <!-- CABEÇALHO -->
    <?php include 'cabecalho.html'; ?>

    <!-- TÍTULO -->
    <h5 class="center">Tela de Sobre</h5>

    <div class="container">
        <div id="contato" class="col s12">
            <div class="row">

                <!-- onsubmit return false impede requisição síncrona -->
                <form id="form_sobre_novo" onsubmit="return false;">

                    <!-- Título -->
                    <div class="row">
                        <div class="input-field">
                            <i class="material-icons prefix">account_circle</i>
                            <input name="titulo_novo" id="titulo_novo" type="text" required autofocus class="validate" data-length="80">
                            <label for="titulo_novo">Título</label>
                        </div>
                    </div>

                    <!-- Campo de Sobre -->
                    <div class="row">
                        <div class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea name="descricao_novo" id="descricao_novo" class="materialize-textarea" data-length="250"></textarea>
                                    <label for="descricao_novo">Descreva sobre a empresa</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Botão -->
                    <div class="row">
                        <div class="col s12 offset-l6">
                            <div class="row">
                                <button id="btnCadastrar" onclick="cadastrar_sobre()" class="btn waves-effect waves-light center red" type="submit" value="Cadastrar" name="cadastrar">
                                    Salvar
                                    <i class="material-icons">check</i>
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>



    <!-- RODAPÉ -->
    <?php include '../rodape.html'; ?>



    <!-- DEPENDÊNCIAS -->



    <!-- Materialize jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- Materialize JS -->
    <script src="../js/materialize.js"></script>

    <!-- Inicializar Materialize -->
    <script>
        M.AutoInit();
        // Exibe informações do usuario logado no menu
        $('#nome').text(usuarioLogado.nome);
    </script>

    <!-- Inicializar Menu Lateral -->
    <script>
        $(document).ready(function() {
            $('.sidenav').sidenav();
        });
    </script>

</body>

</html>