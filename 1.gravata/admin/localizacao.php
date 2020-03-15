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
    <script src="../js/localizacao/funcoes.js"></script>
    <script src="../js/funcoes.js"></script>    <!-- Botão Sair -->

    <!-- Conferir se usuário está logado -->
    <script src="../js/logado.js"></script>

    <title>Gravatá - Localização</title>
</head>

<body>

    <!-- CABEÇALHO -->
    <?php include 'cabecalho.html'; ?>

    <!-- TÍTULO -->
    <h5 class="center">Tela de Localização</h5>

    <!-- Botão Nova Localização -->
    <div class="container">
        <a href="#modal1_novo" role="button" class="waves-effect waves-light btn modal-trigger"><i class="material-icons right">location_on</i>Nova Localização</a>
    </div>

    <!-- Modal Novo -->
    <div id="modal1_novo" class="modal modal-fixed-footer">

        <form id="form_localizacao_novo" onsubmit="return false;">
            <div class="modal-content">
                <h5>Nova Localização</h5>

                <!-- Local -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="local_novo" id="local_novo" type="text" required autofocus class="validate" data-length="50">
                        <label for="local_novo">Local</label>
                    </div>
                </div>

                <!-- Aproximadamente -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="aprox_novo" id="aprox_novo" type="text" required class="validate" data-length="50">
                        <label for="aprox_novo">Aproximadamente</label>
                    </div>
                </div>

                <!-- Km -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="km_novo" id="km_novo" type="text" required class="validate" data-length="50">
                        <label for="km_novo">Km</label>
                    </div>
                </div>

            </div>

            <!-- Botão -->
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
                <button id="btnCadastrar" onclick="cadastrar_localizacao()" class="btn waves-effect waves-light center red" type="submit" value="Cadastrar" name="cadastrar">
                    Salvar
                    <i class="material-icons">send</i>
                </button>
            </div>

        </form>
    </div>

    <!-- Modal Editar -->
    <div id="modal1_editar" class="modal modal-fixed-footer">

        <form id="loc_edt" onsubmit="editar_localizacao()">
            <div class="modal-content">
                <h5>Editar Localização</h5>

                <!-- Código -->
                <div class=" row">
                    <div class="input-field col s3 m3 l3">
                        <i class="material-icons prefix">not_interested</i>
                        <input name="codigo" id="codigo" type="text" data-length="10" class="disabled">
                        <label for="codigo">Código</label>
                    </div>
                </div>

                <!-- Local -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="local_editar" id="local_editar" type="text" required autofocus class="validate" data-length="50">
                        <label for="local_editar">Local</label>
                    </div>
                </div>

                <!-- Aproximadamente -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="aprox_editar" id="aprox_editar" type="text" required autofocus class="validate" data-length="50">
                        <label for="aprox_editar">Aproximadamente</label>
                    </div>
                </div>

                <!-- Km -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="km_editar" id="km_editar" type="text" required autofocus class="validate" data-length="50">
                        <label for="km_editar">Km</label>
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
                        <th>Local</th>
                        <th>Aproximadamente</th>
                        <th>Km</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <tbody id="lista_loc">
                    <!-- Conteúdo adicionado automaticamente por JavaScript -->
                </tbody>

            </table>
        </div>
    </div>

    <template id="modelo">
        <tr>

            <td>%COD%</td>
            <td>%LOC%</td>
            <td>%APR%</td>
            <td>%KM%</td>
            <td>
                <a href="#modal1_editar" onclick="alterar(this, event)" role="button" class="waves-effect waves-light btn modal-trigger"><i class="material-icons right">create</i>Editar</a>
                <a href="#" data-id="%COD%" data-nome="%LOC%" onclick="excluir(this)" role="button" class="waves-effect waves-light btn modal-trigger"><i class="material-icons right">delete</i>Excluir</a>
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
        listar_localizacao(); // trazendo a localização do webservice

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