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
    <script src="../js/galeria/funcoes.js"></script>
    <script src="../js/funcoes.js"></script>    <!-- Botão Sair -->

    <!-- Conferir se usuário está logado -->
    <script src="../js/logado.js"></script>

    <title>Gravatá - Galeria</title>
</head>

<body>

    <!-- CABEÇALHO -->
    <?php include 'cabecalho.html'; ?>

    <!-- TÍTULO -->
    <h5 class="center">Tela de Galeria</h5>

    <!-- Botão Nova Imagem -->
    <div class="container">
        <a href="#modal1_novo" role="button" class="waves-effect waves-light btn modal-trigger"><i class="material-icons right">hotel</i>Nova Imagem</a>
    </div>

    <!-- Modal Novo -->
    <div id="modal1_novo" class="modal modal-fixed-footer">

        <form id="form_galeria_novo" onsubmit="return false;">
            <div class="modal-content">
                <h5>Nova Imagem</h5>

                <!-- Título -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="titulo_novo" id="titulo_novo" type="text" required autofocus class="validate" data-length="50">
                        <label for="titulo_novo">Título</label>
                    </div>
                </div>

                <!-- Descrição -->
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">message</i>
                        <textarea name="descricao_novo" id="descricao_novo" class="materialize-textarea" data-length="250"></textarea>
                        <label for="descricao_novo">Descrição</label>
                    </div>
                </div>

                <!-- Imagem -->
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Carregar imagem</span>
                        <input name="imagem_novo" id="imagem_novo" type="file" onchange="mostraPreview(this)">
                        <img class="img-preview" src="">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                        <small>.png ou .jpg de 256x256 px</small>
                    </div>
                </div>

            </div>

            <!-- Botão -->
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
                <button id="btnCadastrar" onclick="cadastrar_imagem()" class="btn waves-effect waves-light center red" type="submit" value="Cadastrar" name="cadastrar">
                    Salvar
                    <i class="material-icons">send</i>
                </button>
            </div>

        </form>
    </div>

    <!-- Modal Editar -->
    <div id="modal1_editar" class="modal modal-fixed-footer">

        <form id="gal_edt" onsubmit="editar_galeria()">
            <div class="modal-content">
                <h5>Editar Galeria</h5>

                <!-- Código -->
                <div class=" row">
                    <div class="input-field col s3 m3 l3">
                        <i class="material-icons prefix">not_interested</i>
                        <input name="codigo" id="codigo" type="text" data-length="10" class="disabled">
                        <label for="codigo">Código</label>
                    </div>
                </div>

                <!-- Título -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="titulo_editar" id="titulo_editar" type="text" required autofocus class="validate" data-length="50">
                        <label for="titulo_editar">Título</label>
                    </div>
                </div>

                <!-- Descrição -->
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">message</i>
                        <textarea name="descricao_editar" id="descricao_editar" class="materialize-textarea" data-length="250"></textarea>
                        <label for="descricao_editar">Descrição</label>
                    </div>
                </div>

                <!-- Imagem -->
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Carregar imagem</span>
                        <input name="imagem_editar" id="imagem_editar" type="file" onchange="mostraPreview(this)">
                        <img id="img" class="img-preview" src="">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                        <small>.png ou .jpg de 256x256 px</small>
                    </div>
                </div>

            </div>

            <!-- Botão -->
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
                <button id="btnEditar" class="btn waves-effect waves-light center red" type="submit" value="Editar" name="editar">
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
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <tbody id="fotos">
                    <!-- Conteúdo adicionado automaticamente por JavaScript -->
                </tbody>

            </table>
        </div>
    </div>

    <template id="modelo_galeria">
        <tr>

            <td>%ID%</td>
            <td>%TIT%</td>
            <td>%DESC%</td>
            <td>
                <a href="#modal1_editar" onclick="alterar(this, event)" role="button" class="waves-effect waves-light btn modal-trigger"><i class="material-icons right">create</i>Editar</a>
                <a href="#" data-id="%ID%" data-nome="%TIT%" onclick="excluir(this)" role="button" class="waves-effect waves-light btn modal-trigger"><i class="material-icons right">delete</i>Excluir</a>
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
        listar_galeria();       // trazendo os dados do webservice

        // Exibe informações do usuario logado no menu
        $('#nome').text(usuarioLogado.nome);
    </script>

    <!-- Inicializar Menu Lateral -->
    <script>
        $(document).ready(function() {
            $('.sidenav').sidenav();
        });
    </script>

    <!-- Contagem de caracter -->
    <script>
        $(document).ready(function() {
            $('input#titulo, textarea#textarea').characterCounter();
        });
    </script>

</body>

</html>