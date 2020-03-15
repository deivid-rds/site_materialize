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
    <script src="../js/mensagem/funcoes.js"></script>
    <script src="../js/funcoes.js"></script>    <!-- Botão Sair -->

    <!-- Conferir se usuário está logado -->
    <script src="../js/logado.js"></script>

    <title>Gravatá - Mensagem</title>
</head>

<body>

    <!-- CABEÇALHO -->
    <?php include 'cabecalho.html'; ?>

    <!-- TÍTULO -->
    <h5 class="center">Tela de Mensagem</h5>

    <!-- Modal Ver -->
    <div id="modal1_editar" class="modal modal-fixed-footer">

        <form>
            <div class="modal-content">
                <h5>Visualizando Mensagem</h5>

                <!-- Código -->
                <div class=" row">
                    <div class="input-field col s3 m3 l3">
                        <i class="material-icons prefix">not_interested</i>
                        <input name="codigo" id="codigo" type="text" data-length="10" class="disabled">
                        <label for="codigo">Código</label>
                    </div>
                </div>

                <!-- Nome -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">border_top</i>
                        <input name="nome" id="nome" type="text" required autofocus class="validate" data-length="50">
                        <label for="nome">Título</label>
                    </div>
                </div>

                <!-- Telefone -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">phone</i>
                        <input name="fone" id="fone" type="text" required class="validate" data-length="50">
                        <label for="fone">Telefone</label>
                    </div>
                </div>

                <!-- Email -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="email" id="email" type="email" required class="validate" data-length="50">
                        <label for="email">Email</label>
                    </div>
                </div>

                <!-- Mensagem -->
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">message</i>
                        <textarea name="mensagem" id="textarea" class="materialize-textarea" data-length="250"></textarea>
                        <label for="textarea">Descrição</label>
                    </div>
                </div>

            </div>

            <!-- Botão -->
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
                <button id="btnEnviar" onclick="btnContato()" class="btn waves-effect waves-light center red" type="submit" value="Enviar" name="enviar">
                    Salvar
                    <i class="material-icons">send</i>
                </button>
            </div>
            
        </form>
    </div>

    <!-- TABELA -->
    <div class="container">
        <div class="row">
            <table class="highlight">

                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Mensagem</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <tbody id="lista_msg">
                    <!-- Conteúdo adicionado automaticamente por JavaScript -->
                </tbody>

            </table>
        </div>
    </div>

    <template id="modelo">
        <tr>

            <td>%COD%</td>
            <td>%NOME%</td>
            <td>%TEL%</td>
            <td>%MSG%</td>
            <td>
            <a href="#modal1_editar" role="button" class="waves-effect waves-light btn modal-trigger"><i class="material-icons right">remove_red_eye</i>Ver</a>
                <a href="#modal1_editar" role="button" class="waves-effect waves-light btn modal-trigger"><i class="material-icons right">delete</i>Excluir</a>
            </td>

        </tr>
    </template>

    <!-- Spinner (aguardando resposta) -->
    <template id="spinner">

        <div class="center">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue-only">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>

    </template>

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
        listar_mensagem();       // trazendo os dados do webservice

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