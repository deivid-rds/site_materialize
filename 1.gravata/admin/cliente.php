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
    <script src="../js/cliente/funcoes.js"></script>
    <script src="../js/funcoes.js"></script> <!-- Botão Sair -->

    <!-- Conferir se usuário está logado -->
    <script src="../js/logado.js"></script>

    <title>Gravatá - Cliente</title>
</head>

<body>

    <!-- CABEÇALHO -->
    <?php include 'cabecalho.html'; ?>

    <!-- TÍTULO -->
    <h5 class="center">Tela de Cliente</h5>

    <!-- Botão Nova Acomodação -->
    <div class="container">
        <a href="#modal1_novo" role="button" class="waves-effect waves-light btn modal-trigger"><i class="material-icons right">face</i>Novo Cliente</a>
    </div>

    <!-- Modal Novo -->
    <div id="modal1_novo" class="modal modal-fixed-footer">

        <form id="form_cliente_novo" onsubmit="return false;">
            <div class="modal-content">
                <h5>Novo Cliente</h5>

                <!-- Nome -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="nome_novo" id="nome_novo" type="text" required autofocus class="validate" data-length="80">
                        <label for="nome_novo">Nome</label>
                    </div>
                </div>

                <!-- Telefone -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="telefone_novo" id="telefone_novo" type="tel" required class="validate" data-length="15">
                        <label for="telefone_novo">Telefone</label>
                    </div>
                </div>

                <!-- E-mail -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="email_novo" id="email_novo" type="email" required class="validate" data-length="80">
                        <label for="email_novo">E-mail</label>
                    </div>
                </div>

                <!-- Senha -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">phone</i>
                        <input name="senha_novo" id="senha_novo" type="password" required class="validate" data-length="10">
                        <label for="senha_novo">Senha</label>
                    </div>
                </div>

                <!-- Rua -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="rua_novo" id="rua_novo" type="text" class="validate" data-length="80">
                        <label for="rua_novo">Rua</label>
                    </div>
                </div>

                <!-- Número da Casa -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="numero_casa_novo" id="numero_casa_novo" type="number" class="validate" data-length="5">
                        <label for="numero_casa_novo">Número</label>
                    </div>
                </div>

                <!-- Cidade -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="cidade_novo" id="cidade_novo" type="text" class="validate" data-length="80">
                        <label for="cidade_novo">Cidade</label>
                    </div>
                </div>

                <!-- Estado -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="estado_novo" id="estado_novo" type="text" class="validate" data-length="80">
                        <label for="estado_novo">Estado</label>
                    </div>
                </div>

                <!-- Observação -->
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">message</i>
                        <textarea name="observacao_novo" id="textarea" class="materialize-textarea" data-length="250"></textarea>
                        <label for="textarea">Descrição</label>
                    </div>
                </div>

            </div>

            <!-- Botão -->
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
                <button id="btnCadastrar" onclick="cadastrar_cliente()" class="btn waves-effect waves-light center red" type="submit" value="Cadastrar" name="cadastrar">
                    Salvar
                    <i class="material-icons">send</i>
                </button>
            </div>

        </form>
    </div>

    <!-- Modal Editar -->
    <div id="modal1_editar" class="modal modal-fixed-footer">

        <form id="cli_edt" onsubmit="editar_cliente()">
            <div class="modal-content">
                <h5>Editar Cliente</h5>

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
                        <i class="material-icons prefix">account_circle</i>
                        <input name="nome_edt" id="nome_edt" type="text" required autofocus class="validate" data-length="80">
                        <label for="nome_edt">Nome</label>
                    </div>
                </div>

                <!-- Telefone -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="telefone_edt" id="telefone_edt" type="tel" required class="validate" data-length="15">
                        <label for="telefone_edt">Telefone</label>
                    </div>
                </div>

                <!-- E-mail -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="email_edt" id="email_edt" type="email" class="validate" data-length="80">
                        <label for="email_edt">E-mail</label>
                        <span class="helper-text" data-error="e-mail incorreto" data-success="e-mail correto"></span>   <!-- A classe helper-text faz a validação de certo ou errado -->
                    </div>
                </div>

                <!-- Senha -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">phone</i>
                        <input name="senha_edt" id="senha_edt" type="password" required class="validate" data-length="10">
                        <label for="senha_edt">Senha</label>
                    </div>
                </div>

                <!-- Rua -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="rua_edt" id="rua_edt" type="text" class="validate" data-length="80">
                        <label for="rua_edt">Rua</label>
                    </div>
                </div>

                <!-- Número da Casa -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="numero_casa_edt" id="numero_casa_edt" type="number" class="validate" data-length="5">
                        <label for="numero_casa_edt">Número</label>
                    </div>
                </div>

                <!-- Cidade -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="cidade_edt" id="cidade_edt" type="text" class="validate" data-length="80">
                        <label for="cidade_edt">Cidade</label>
                    </div>
                </div>

                <!-- Estado -->
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="estado_edt" id="estado_edt" type="text" class="validate" data-length="80">
                        <label for="estado_edt">Estado</label>
                    </div>
                </div>

                <!-- Observação -->
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">message</i>
                        <textarea name="observacao_edt" id="textarea_edt" class="materialize-textarea" data-length="250"></textarea>
                        <label for="textarea">Descrição</label>
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
                        <th>Cliente</th>
                        <th>Telefone</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <tbody id="lista_cli">
                    <!-- Conteúdo adicionado automaticamente por JavaScript -->
                </tbody>

            </table>
        </div>
    </div>

    <template id="modelo">
        <tr>

            <td>%COD%</td>
            <td>%CLI%</td>
            <td>%TEL%</td>
            <td>
                <a href="#modal1_editar" onclick="alterar(this, event)" role="button" class="waves-effect waves-light btn modal-trigger"><i class="material-icons right">create</i>Editar</a>
                <a href="#" data-id="%COD%" data-nome="%CLI%" onclick="excluir(this)" role="button" class="waves-effect waves-light btn modal-trigger"><i class="material-icons right">delete</i>Excluir</a>
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
        listar_cliente(); // trazendo os clientes do webservice

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