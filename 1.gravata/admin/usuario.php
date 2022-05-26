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
    <script src="../js/usuario/funcoes.js"></script>
    <script src="../js/funcoes.js"></script> <!-- Botão Sair -->

    <!-- Conferir se usuário está logado -->
    <script src="../js/logado.js"></script>

    <title>Gravatá - Usuário</title>
</head>

<body>

    <!-- CABEÇALHO -->
    <?php include 'cabecalho.html'; ?>

    <!-- TÍTULO -->
    <h5 class="center">Tela de Usuário</h5>

    <!-- Botão Nova Acomodação -->
    <div class="container">
        <a href="#modal1_novo" role="button" class="waves-effect waves-light btn modal-trigger"><i class="material-icons right">group</i>Novo Usuário</a>
    </div>

    <!-- Modal Novo -->
    <div id="modal1_novo" class="modal modal-fixed-footer">

        <form id="form_usuario_novo" onsubmit="return false;">
            <div class="modal-content">
                <h5>Novo Usuário</h5>

                <!-- Username -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="username_novo" id="username_novo" type="text" required autofocus class="validate" data-length="50">
                        <label for="username_novo">Username</label>
                    </div>
                </div>

                <!-- Nome -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="nome_novo" id="nome_novo" type="text" required class="validate" data-length="50">
                        <label for="nome_novo">Cliente</label>
                    </div>
                </div>

                <!-- Senha -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">phone</i>
                        <input name="senha_novo" id="senha_novo" type="password" required class="validate" data-length="50">
                        <label for="senha_novo">Senha</label>
                    </div>
                </div>

                <!-- Tipo -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <label>Tipo<label>
                        <p>
                            <label>
                                <input name="group1" type="radio" checked />
                                <span>Administrador</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input name="group1" type="radio" />
                                <span>Comum</span>
                            </label>
                        </p>
                    </div>
                </div>

            </div>

            <!-- Botão -->
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
                <button id="btnCadastrar" onclick="cadastrar_usuario()" class="btn waves-effect waves-light center red" type="submit" value="Cadastrar" name="cadastrar">
                    Salvar
                    <i class="material-icons">send</i>
                </button>
            </div>

        </form>
    </div>

    <!-- Modal Editar -->
    <div id="modal1_editar" class="modal modal-fixed-footer">

        <form id="usu_edt" onsubmit="editar_usuario()">
            <div class="modal-content">
                <h5>Editar Usuário</h5>

                <!-- Código -->
                <div class=" row">
                    <div class="input-field col s3 m3 l3">
                        <i class="material-icons prefix">not_interested</i>
                        <input name="codigo" id="codigo" type="text" data-length="10" class="disabled">
                        <label for="codigo">Código</label>
                    </div>
                </div>

                <!-- Username -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="username_editar" id="username_editar" type="text" required autofocus class="validate" data-length="50">
                        <label for="username_editar">Username</label>
                    </div>
                </div>

                <!-- Nome -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="nome_editar" id="nome_editar" type="text" required class="validate" data-length="50">
                        <label for="nome_editar">Cliente</label>
                    </div>
                </div>

                <!-- Senha -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">phone</i>
                        <input name="senha_editar" id="senha_editar" type="password" required class="validate" data-length="50">
                        <label for="senha_editar">Senha</label>
                    </div>
                </div>

                <!-- Tipo -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <label>Tipo<label>
                        <p>
                            <label>
                                <input name="group1" type="radio" checked />
                                <span>Administrador</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input name="group1" type="radio" />
                                <span>Comum</span>
                            </label>
                        </p>
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
                        <th>Username</th>
                        <th>Nome</th>
                        <th>Tipo</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <tbody id="lista_user">
                    <!-- Conteúdo adicionado automaticamente por JavaScript -->
                </tbody>
            </table>
        </div>
    </div>

    <template id="modelo">
        <tr>

            <td>%COD%</td>
            <td>%USER%</td>
            <td>%NOME%</td>
            <td>%TIPO%</td>
            <td>
                <a href="#modal1_editar" onclick="alterar(this, event)" role="button" class="waves-effect waves-light btn modal-trigger"><i class="material-icons right">create</i>Editar</a>
                <a href="#" data-id="%COD%" data-nome="%USER%" onclick="excluir(this)" role="button" class="waves-effect waves-light btn modal-trigger"><i class="material-icons right">delete</i>Excluir</a>
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
        listar_usuario(); // trazendo os dados do webservice

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