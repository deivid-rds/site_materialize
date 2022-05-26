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
    <script src="../js/principal/funcoes.js"></script>
    <script src="../js/principal_slider/funcoes.js"></script>
    <script src="../js/funcoes.js"></script> <!-- Botão Sair -->

    <!-- Conferir se usuário está logado -->
    <script src="../js/logado.js"></script>

    <title>Gravatá - Principal</title>
</head>

<body>

    <!-- CABEÇALHO -->
    <?php include 'cabecalho.html'; ?>

    <!-- TÍTULO 1 -->
    <h5 class="center">Tela Principal (Slider) </h5>



    <!-- PRINCIPAL SLIDER -->



    <!-- Botão Novo Slider -->
    <div class="container">
        <a href="#modal1_novo" role="button" class="waves-effect waves-light btn modal-trigger"><i class="material-icons right">hotel</i>Novo Slider</a>
    </div>

    <!-- Modal Novo -->
    <div id="modal1_novo" class="modal modal-fixed-footer">

        <form id="form_slider_novo" onsubmit="return false;">
            <div class="modal-content">
                <h5>Nova Slider</h5>

                <!-- Título -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="titulo_novo_slider" id="titulo_novo_slider" type="text" required autofocus class="validate" data-length="50">
                        <label for="titulo_novo_slider">Título</label>
                    </div>
                </div>

                <!-- Descrição -->
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">message</i>
                        <textarea name="descricao_novo_slider" id="textarea" class="materialize-textarea" data-length="250"></textarea>
                        <label for="textarea">Descrição</label>
                    </div>
                </div>

                <!-- Imagem -->
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Carregar imagem</span>
                        <input name="imagem_novo_slider" id="imagem_novo_slider" type="file" onchange="mostraPreview(this)">
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
                <button id="btnCadastrarSlider" onclick="cadastrar_slider()" class="btn waves-effect waves-light center red" type="submit" value="Cadastrar" name="cadastrar_princ_slider">
                    Salvar
                    <i class="material-icons">send</i>
                </button>
            </div>

        </form>
    </div>

    <!-- Modal Editar -->
    <div id="modal_slider_editar" class="modal modal-fixed-footer">

        <form id="pri_sli_edt" onsubmit="editar_slider()">
            <div class="modal-content">
                <h5>Editar Slider</h5>

                <!-- Código -->
                <div class=" row">
                    <div class="input-field col s3 m3 l3">
                        <i class="material-icons prefix">not_interested</i>
                        <input name="codigo_slider" id="codigo_slider" type="text" data-length="10" disabled="disabled">
                        <label for="codigo_slider">Código</label>
                    </div>
                </div>

                <!-- Título -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="titulo_editar_slider" id="titulo_editar_slider" type="text" required autofocus class="validate" data-length="50">
                        <label for="titulo_editar_slider">Título</label>
                    </div>
                </div>

                <!-- Descrição -->
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">message</i>
                        <textarea name="descricao_editar_slider" id="descricao_editar_slider" class="materialize-textarea" data-length="250"></textarea>
                        <label for="descricao_editar_slider">Descrição</label>
                    </div>
                </div>

                <!-- Imagem -->
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Carregar imagem</span>
                        <input name="imagem_editar_slider" id="imagem_editar_slider" type="file" onchange="mostraPreview(this)">
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
                <a id="btnEditarSlider" class="btn waves-effect waves-light center red" type="submit" value="Editar" name="editar_slider">
                    Salvar
                    <i class="material-icons">send</i>
                </a>
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

                <tbody id="img_principal_slider">
                    <!-- Conteúdo adicionado automaticamente por JavaScript -->
                </tbody>

            </table>
        </div>
    </div>

    <template id="modelo_principal_slider">
        <tr>

            <td>%ID_SLIDER%</td>
            <td>%TITULO_SLIDER%</td>
            <td>%DESCRICAO_SLIDER%</td>
            <td>
                <a href="#modal_slider_editar" onclick="alterar(this, event)" role="button" class="waves-effect waves-light btn modal-trigger"><i class="material-icons right">create</i>Editar</a>
                <a href="#" data-id="%ID_SLIDER%" data-nome="%TITULO_SLIDER%" onclick="excluir(this)" role="button" class="waves-effect waves-light btn modal-trigger"><i class="material-icons right">delete</i>Excluir</a>
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



    <!-- PRINCIPAL -->



    <!-- TÍTULO 2 -->
    <br><br>
    <h5 class="center">Tela Principal</h5>
    <br><br>

    <!-- Botão Novo Principal -->
    <div class="container">
        <a href="#modal2_novo" role="button" class="waves-effect waves-light btn modal-trigger"><i class="material-icons right">hotel</i>Novo Principal</a>
    </div>

    <!-- Modal Novo -->
    <div id="modal2_novo" class="modal modal-fixed-footer">

        <form id="form_principal_novo" onsubmit="return false;">
            <div class="modal-content">
                <h5>Novo Principal</h5>

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
                <button id="btnCadastrarPrincipal" onclick="cadastrar_principal()" class="btn waves-effect waves-light center red" type="submit" value="Cadastrar" name="cadastrar">
                    Salvar
                    <i class="material-icons">send</i>
                </button>
            </div>

        </form>
    </div>

    <!-- Modal Editar -->
    <div id="modal2_editar" class="modal modal-fixed-footer">

        <form id="pri_edt" onsubmit="editar_principal()">
            <div class="modal-content">
                <h5>Editar Principal</h5>

                <!-- Código -->
                <div class=" row">
                    <div class="input-field col s3 m3 l3">
                        <i class="material-icons prefix">not_interested</i>
                        <input name="codigo" id="codigo" type="text" data-length="10" disabled="disabled">
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

                <tbody id="card_principal">
                    <!-- Conteúdo adicionado automaticamente por JavaScript -->
                </tbody>

            </table>
        </div>
    </div>

    <template id="modelo_principal">
        <tr>

            <td>%ID%</td>
            <td>%TITULO%</td>
            <td>%DESCRICAO%</td>
            <td>
                <a href="#modal2_editar" onclick="alterar_principal(this, event)" role="button" class="waves-effect waves-light btn modal-trigger"><i class="material-icons right">create</i>Editar</a>
                <a href="#" data-id="%ID%" data-nome="%TITULO%" onclick="excluir_principal(this)" role="button" class="waves-effect waves-light btn modal-trigger"><i class="material-icons right">delete</i>Excluir</a>
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
        listar_principal_slider(); // trazendo o principal_slider (tela cliente) do webservice
        listar_principal() // trazendo o principal (tela cliente) do webservice

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