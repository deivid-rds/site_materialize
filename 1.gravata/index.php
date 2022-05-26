<?php

require_once 'conexao/conecta.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<!-- Favicon -->
<link rel="shortcut icon" href="/imagem/icone/favicon.ico">

<head>

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Empresa do ramo de hotelaria que nasceu com o intuito de proporcianar à população um local agradável para descanso, alimentação e diversão.">
    <meta name="keywords" content="hostel, estalagem, hospedagem, pousada, repouso, hotel, lazer, piscina">

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Adicionando CSS -->
    <link rel="stylesheet" href="/css/estilo.css">

    <!-- Funções JavaScript -->
    <script src="js/configuracoes.js"></script>
    <script src="js/funcoes.js"></script>
    <script src="js/principal_slider/funcoes.js"></script>
    <script src="js/principal/funcoes.js"></script>
    <script src="js/galeria/funcoes.js"></script>
    <script src="js/acomodacao/funcoes.js"></script>
    <script src="js/mensagem/funcoes.js"></script>
    <script src="js/localizacao/funcoes.js"></script>
    <script src="js/sobre/funcoes.js"></script>

    <!-- Caso o usuário esteja logado -->
    <script>
        var usuarioLogado = JSON.parse(localStorage.getItem('usuario'));

        if (usuarioLogado) {
            window.location.href = 'admin/principal.php';
        }
    </script>

    <!-- Entrar no aplicativo -->
    <script>
        function entrar() {
            var formulario = document.forms.form1;

            // new FormData(formulario) = pega todos os campos do form para poder enviar
            var dados = new FormData(formulario);

            $.post({

                // url_base está vindo do arquivo /js/configuracoes.js
                url: url_base + '/webservice/login.php',
                data: dados,
                contentType: false, // evita que o jQuery analise o dado enviado
                processData: false, // evita que o jQuery analise o dado enviado

                beforeSend: function() {
                    $('#btnEntrar').prop('disabled', true).val('Aguarde...');
                },

            }).done(function(resposta) {

                // TODO: fazer o tratamento dos erros

                var obj = JSON.parse(resposta);
                console.log(obj);

                if (obj.erro) //Se existir erro
                {
                    alert(obj.erro); //Exibir erro
                    $('#btnEntrar').prop('disabled', false).val('Entrar');
                    return;
                }

                localStorage.setItem('usuario', resposta);
                window.location.href = 'admin/principal.php';

            });
        }
    </script>

    <!-- Título -->
    <title>Gravatá - Hostel</title>

</head>

<body>



    <!-- TOPO DA PÁGINA -->

    <!-- NAVBAR -->
    <nav class="nav-extended deep-orange">

        <div class="nav-wrapper center">
            <img style="margin-top: 25px;" src="imagem/logo.png" alt="Logo"><br>

            <!-- Redes Sociais -->
            <!-- Tooltipped é o hint -->
            <a class="tooltipped" data-position="top" data-tooltip="Whatsapp" href="https://api.whatsapp.com/send?phone=+55019993814444&text=Olá, tudo bem?" target="_blank"><img src="imagem/icone/claro/whatsapp.png" alt="Whatsapp"></a>
            <a class="tooltipped" data-position="top" data-tooltip="Facebook" href="https://www.facebook.com/Hostelgravata/" target="_blank">
                <img src="imagem/icone/claro/facebook.png" alt="Facebook"></a>
            <a class="tooltipped" data-position="top" data-tooltip="Instagram" href="https://www.instagram.com/hostelgravata/" target="_blank">
                <img src="imagem/icone/claro/instagram.png" alt="Instagram"></a>
        </div>

        <!-- Abas -->
        <div class="nav-wrapper" style="padding: 0 10% 0 10%">
            <ul id="tabSelector" class="tabs tabs-transparent tabs-fixed-width">
                <li class="tab"><a href="#inicio" class="active">Início</a></li>
                <li class="tab"><a href="#galeria">Galeria</a></li>
                <li class="tab"><a href="#acomodacao">Acomodação</a></li>
                <li class="tab"><a href="#contato">Contato</a></li>
                <li class="tab"><a href="#localizacao">Localização</a></li>
                <li class="tab"><a href="#sobre">Sobre</a></li>
                <!-- <li class="tab"><a href="#login">Login</a></li> -->
            </ul>
        </div>
    </nav>



    <!-- ABAS -->

    <!-- ABA INÍCIO -->
    <div id="inicio" class="row">
        <div class="col s12" style="padding: 0">

            <!-- Imagens Slider -->
            <div class="slider">
                <ul id="img_principal_slider" class="slides">

                    <!-- Conteúdo adicionado automaticamente por JavaScript -->


                    <li>
                        <img src="imagem/hidro3.jpg">
                        <div class="caption left-align" style="background-color: rgba(0, 0, 0, 0.4);">
                            <h3>Para você</h3>
                            <h5 class="light grey-text text-lighten-3">Tenha os melhores momentos com seus familiares e amigos</h5>
                        </div>
                    </li>

                    <li>
                        <img src="imagem/frente5.JPG">
                        <div class="caption left-align" style="background-color: rgba(0, 0, 0, 0.4);">
                            <h3>Business</h3>
                            <h5 class="light grey-text text-lighten-3">Aproveite nossas acomodações e nosso ambiente de reunião para sua empresa</h5>
                        </div>
                    </li>

                </ul>
            </div>

            <!-- template da aba início (principal_slider) -->
            <template id="modelo_principal_slider">

                <li>
                    <img src="%IMG_SLIDER%">
                    <div class="caption left-align" style="background-color: rgba(0, 0, 0, 0.4);">
                        <h3>%TITULO_SLIDER%</h3>
                        <h5 class="light grey-text text-lighten-3">%DESCRICAO_SLIDER%</h5>
                    </div>
                </li>

            </template>

            <!-- Cards principal -->
            <div id="card_principal" class="container">

                <!-- Conteúdo adicionado automaticamente por JavaScript -->


                <div class="col s12 m6 l6" data-id="%ID%">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img class="img_principal" src="imagem/piscina9.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title center">Para você</span>
                            <p>Tenha os melhores momentos com seus familiares e amigos.</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l6" data-id="%ID%">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img class="img_principal" src="imagem/business2.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title center">Business</span>
                            <p>Aproveite nossas acomodações e nosso ambiente de reunião para sua empresa.</p>
                        </div>
                    </div>
                </div>


            </div>

            <!-- template da aba início (principal) -->
            <template id="modelo_principal">

                <div class="col s12 m6 l6" data-id="%ID%">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="%IMG%">
                        </div>
                        <div class="card-content">
                            <span class="card-title center">%TITULO%</span>
                            <p>%DESCRICAO%</p>
                        </div>
                    </div>
                </div>

            </template>

        </div>
    </div>

    <!-- ABA GALERIA -->
    <div id="galeria" class="container">

        <div class="wrapper-carousel">
            <h5 class="espaco_acima">Frente</h5>

            <div id="carousel-1" class="carousel">

                <!-- É preciso ter dentro do elemento da classe .carousel um elemento .carousel-item, mesmo que vazio, para que ele possa fazer os cálculos. -->

                <!-- Conteúdo adicionado automaticamente por JavaScript -->


                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/frente1.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/frente2.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/frente3.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/frente4.jpg">
                </div>

            </div>
        </div>

        <div class="wrapper-carousel">
            <h5 class="espaco_acima">Área Externa</h5>

            <div id="carousel-2" class="carousel">
                <!-- id="fotos" -->

                <!-- É preciso ter dentro do elemento da classe .carousel um elemento .carousel-item, mesmo que vazio, para que ele possa fazer os cálculos. -->

                <!-- Conteúdo adicionado automaticamente por JavaScript -->


                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/piscina1.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/piscina2.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/piscina3.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/piscina4.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/piscina5.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/piscina6.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/piscina8.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/piscina9.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/piscina10.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/piscina11.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/balcao1.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/balcao2.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/bebidas.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/churrasqueira.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/externo.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/externo1.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/externo2.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/hidro1.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/hidro2.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/lavanderia.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/corredor_suite.jpg">
                </div>

            </div>
        </div>

        <div class="wrapper-carousel">
            <h5 class="espaco_acima">Área Business</h5>

            <div id="carousel-3" class="carousel">

                <!-- É preciso ter dentro do elemento da classe .carousel um elemento .carousel-item, mesmo que vazio, para que ele possa fazer os cálculos. -->

                <!-- Conteúdo adicionado automaticamente por JavaScript -->


                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/business1.jpg">
                    <h6></h6>
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/business2.jpg">
                    <h6></h6>
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/business3.jpg">
                    <h6></h6>
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/business4.jpg">
                    <h6></h6>
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/business5.jpg">
                    <h6></h6>
                </div>

            </div>
        </div>

        <div class="wrapper-carousel">
            <h5 class="espaco_acima">Suítes Compartilhadas</h5>

            <div id="carousel-4" class="carousel">

                <!-- É preciso ter dentro do elemento da classe .carousel um elemento .carousel-item, mesmo que vazio, para que ele possa fazer os cálculos. -->

                <!-- Conteúdo adicionado automaticamente por JavaScript -->


                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/suite_compartilhada1.jpg">
                    <h6></h6>
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/suite_compartilhada2.jpg">
                    <h6></h6>
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/suite_compartilhada3.jpg">
                    <h6></h6>
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/suite_compartilhada4.jpg">
                    <h6></h6>
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/suite_compartilhada5.jpg">
                    <h6></h6>
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/suite_compartilhada6.jpg">
                    <h6></h6>
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/suite_compartilhada7.jpg">
                    <h6></h6>
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/suite_compartilhada8.jpg">
                    <h6></h6>
                </div>

            </div>
        </div>

        <div class="wrapper-carousel">
            <h5 class="espaco_acima">Suíte Casal</h5>

            <div id="carousel-5" class="carousel">

                <!-- É preciso ter dentro do elemento da classe .carousel um elemento .carousel-item, mesmo que vazio, para que ele possa fazer os cálculos. -->

                <!-- Conteúdo adicionado automaticamente por JavaScript -->


                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/suite_casal1.jpg">
                    <h6></h6>
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/suite_casal2.jpg">
                    <h6></h6>
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/suite_casal3.jpg">
                    <h6></h6>
                </div>

            </div>
        </div>

        <div class="wrapper-carousel">
            <h5 class="espaco_acima">Suíte Família</h5>

            <div id="carousel-6" class="carousel">

                <!-- É preciso ter dentro do elemento da classe .carousel um elemento .carousel-item, mesmo que vazio, para que ele possa fazer os cálculos. -->

                <!-- Conteúdo adicionado automaticamente por JavaScript -->


                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/quarto_familia.jpeg">
                    <h6></h6>
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/quarto_familia_premium.jpeg">
                    <h6></h6>
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/quarto1.jpg">
                    <h6></h6>
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/quarto2.jpg">
                    <h6></h6>
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/suite_familia1.jpg">
                    <h6></h6>
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/suite_familia2.jpg">
                    <h6></h6>
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/suite_familia3.jpg">
                    <h6></h6>
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/suite_familia4.jpg">
                    <h6></h6>
                </div>

            </div>
        </div>

        <br><br>

        <!-- template da aba galeria -->
        <template id="modelo_galeria">
            <a class="carousel-item"><img src="%IMG%"></a>
        </template>

    </div>

    <!-- ABA ACOMODAÇÃO -->
    <div id="acomodacao" class="col s12 container">

        <!-- Conteúdo adicionado automaticamente por JavaScript -->



        <div class="row" data-id="%ID%">

            <h5 class="header espaco_acima">Quarto Coletivo</h5>

            <div class="card horizontal hoverable">
                <div class="card-image">
                    <img src="imagem/quarto_coletivo.jpeg">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p>Quarto compartilhado com 4 leitos (2 beliches) e banheiro.</p>
                    </div>
                    <div class="card-action center links">
                        <a href="#contato-tab"><span class="cor-laranja">Para reservar, entre em contato</span></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row" data-id="%ID%">

            <h5 class="header espaco_acima">Quarto Família</h5>

            <div class="card horizontal hoverable">
                <div class="card-image">
                    <img src="imagem/quarto_familia.jpeg">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p>Uma cama de casal e mais um leito, além de banheiro.</p>
                    </div>
                    <div class="card-action center links">
                        <a href="#contato-tab"><span class="cor-laranja">Para reservar, entre em contato</span></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row" data-id="%ID%">

            <h5 class="header espaco_acima">Quarto Família Premium</h5>

            <div class="card horizontal hoverable">
                <div class="card-image">
                    <img src="imagem/quarto_familia_premium.jpeg">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p>Uma cama de casal e mais um leito, além de banheiro, acesso à tv, frigobar, armário embutido e hidromassagem.</p>
                    </div>
                    <div class="card-action center links">
                        <a href="#contato-tab"><span class="cor-laranja">Para reservar, entre em contato</span></a>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- template da aba acomodação -->
    <template id="modelo_acom">
        <div class="row" data-id="%ID%">

            <h5 class="header">%TITULO%</h5>

            <div class="card horizontal hoverable">
                <div class="card-image">
                    <img src="%IMG%">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p>%DESCRICAO%</p>
                    </div>
                    <div class="card-action center">
                        <a href="#">Reservar</a>
                    </div>
                </div>
            </div>

        </div>
    </template>

    <!-- ABA CONTATO -->
    <div id="contato" class="col s12 container">
        <div class="row">

            <!-- Telefone -->
            <h5 class="espaco_acima">Telefone</h5>
            <a class="hover-laranja cor-padrao" href="tel:19993814444">(19) 9 9381-4444</a>

            <!-- E-mail -->
            <h5 class="espaco_acima">E-mail</h5>
            <a class="hover-laranja cor-padrao" href="mailto:contato@hostelgravata.com">contato@hostelgravata.com</a>

        </div>
    </div>

    <!-- ABA LOCALIZAÇÃO -->
    <div id="localizacao" class="container">

        <!-- Endereço -->
        <div class="row">
            <h5 class="espaco_acima">Endereço</h5>
            <address>Rua Antônio Corrêa Pacheco, 185 - Jardim Bartira - Piracicaba - SP</address>
        </div>

        <!-- Mapa -->
        <div class="row">
            <h5 class="espaco_acima">Mapa</h5>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14719.181730897415!2d-47.53981682081285!3d-22.735843659854396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c62f5a334ec997%3A0xf60f58bfafadadc5!2sR.%20Antonio%20Corr%C3%AAa%20Pacheco%2C%20185%2C%20Piracicaba%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1569077570558!5m2!1spt-BR!2sbr" width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>

        <!-- Endereços Aproximados -->
        <div class="row">

            <h5 class="espaco_acima">Hostel Gravatá para</h5>

            <table class="highlight">

                <thead>
                    <tr>
                        <th>Local</th>
                        <th>Aproximadamente</th>
                        <th>Km</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- id="lista_loc" -->

                    <tr>
                        <td>Hyundai</td>
                        <td>13 minutos</td>
                        <td>14,5 km</td>
                    </tr>

                    <tr>
                        <td>Rodoviária</td>
                        <td>19 minutos</td>
                        <td>13,9 km</td>
                    </tr>

                    <tr>
                        <td>Esalq</td>
                        <td>14 minutos</td>
                        <td>11,9 km</td>
                    </tr>

                    <tr>
                        <td>Shopping</td>
                        <td>15 minutos</td>
                        <td>13,5 km</td>
                    </tr>

                    <tr>
                        <td>Unimed</td>
                        <td>14 minutos</td>
                        <td>13,1 km</td>
                    </tr>

                </tbody>

            </table>

            <!-- <template id="modelo">
                <tr>

                    <td>%LOC%</td>
                    <td>%APR%</td>
                    <td>%KM%</td>

                </tr>
            </template> -->

        </div>
    </div>

    <!-- ABA SOBRE -->
    <div id="sobre" class="col s12 container">

        <!-- Conteúdo adicionado automaticamente por JavaScript -->


        <h5 class="espaco_acima">Empresa</h5>
        <p>Empresa do ramo de hotelaria que nasceu com o intuito de proporcianar à população um local agradável para descanso, alimentação e diversão.</p>

    </div>

    <!-- template da aba sobre -->
    <template id="modelo_sobre">
        <div class="row">

            <h5>%TITULO%</h5>
            <p>%DESCRICAO%</p>

        </div>
    </template>

    <!-- ABA LOGIN -->
    <!-- <div id="login" class="container">
        <div class="row"> -->

    <!-- onsubmit return false impede requisição síncrona -->
    <!-- <form id="form1" onsubmit="return false;"> -->

    <!-- Campos de ID -->
    <!-- <div class="row">
                    <div class="input-field col m6 l6 offset-m3 offset-l3">
                        <i class="material-icons prefix">account_circle</i>
                        <input type="text" name="username" id="name" data-length="40">
                        <label for="name">Usuário</label>
                    </div>
                </div> -->

    <!-- Campo de Senha -->
    <!-- <div class="row">
                    <div class="input-field col m6 l6 offset-m3 offset-l3">
                        <i class="material-icons prefix">vpn_key</i>
                        <input type="password" name="senha" id="pass" data-length="40">
                        <label for="pass">Senha</label>
                    </div>
                </div> -->

    <!-- Botão Enviar -->
    <!-- <div class="row center">
                    <button id="btnEntrar" onclick="entrar()" value="Login" type="submit" class="btn waves-effect waves-light red">
                        Enviar
                        <i class="material-icons">send</i>
                    </button>
                </div>

            </form>
        </div>
    </div> -->



    <!-- RODAPÉ -->
    <?php include 'rodape.html'; ?>



    <!-- DEPENDÊNCIAS -->



    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Inicializar Materialize -->
    <script>
        M.AutoInit();
        // listar_principal_slider(); // trazendo o principal_slider (tela cliente) do webservice
        // listar_principal(); // trazendo o principal (tela cliente) do webservice
        // listar_galeria(); // trazendo a galeria (tela cliente) do webservice
        // listar_acomodacao(); // trazendo a acomodação (tela cliente) do webservice
        // listar_localizacao(); // trazendo a localização (tela cliente) do webservice
        // listar_sobre(); // trazendo o sobre (tela cliente) do webservice
    </script>

    <script>
        $(document).ready(function() {
            $('.tabs').tabs(); // Funcionamento das abas
            $('.slider').slider(); // Slider da página inicial (imagem com as frases)
            $('.materialboxed').materialbox(); // Para as imagens serem expandidas
            $('.tooltipped').tooltip(); // O 'hint' nas Redes Sociais

            // Chamar links do Menu do Rodapé 
            $('.links-rodape > .links > a').on('click', function(e) {
                e.preventDefault();

                var tab = $(this).attr('href').replace('-tab', ''); // Remove o '-tab' do href
                tab = tab.replace('#', '');

                const navbar = $('#tabSelector').get(0);
                M.Tabs.getInstance(navbar).select(tab);
                subir();
            });

            // Chamar links do Menu na aba Acomodação 
            $('.links > a').on('click', function(e) {
                e.preventDefault();

                var tab = $(this).attr('href').replace('-tab', ''); // Remove o '-tab' do href
                tab = tab.replace('#', '');

                const navbar = $('#tabSelector').get(0);
                M.Tabs.getInstance(navbar).select(tab);
                subir();
            });

            var tabs = M.Tabs.getInstance($('#tabSelector'));

            // Resolver problema onde um carousel sobressai a outro (Parte 1)
            tabs.options.onShow = function() {
                $('.carousel').carousel();
                $('#carousel-1').carousel();
                $('#carousel-2').carousel();
                $('#carousel-3').carousel();
                $('#carousel-4').carousel();
                $('#carousel-5').carousel();
                $('#carousel-6').carousel();
            };

            // Resolver problema onde um carousel sobressai a outro (Parte 2)
            $('.wrapper-carousel').on('click', function() {
                $('.wrapper-carousel').css('z-index', 0);
                $(this).css('z-index', 9999);
            });

            subir(true);

        })

        // Ao clicar numa aba, subir de maneira mais suave
        function subir(direto) {
            var body = $("html, body");
            if (direto) {
                body.scrollTop(0);
            } else {
                body.animate({
                    scrollTop: 0
                }, 500);
            }
        }

        // Força o fechamento do Material Box depois de meio segundo se o usuário arrastar para a próxima foto
        $(document).on("mousedown touchstart", ".materialboxed.active, #materialbox-overlay", function() {
            setTimeout(function() {
                if ($(".materialboxed.active").length) {
                    var instance = M.Materialbox.getInstance($(".materialboxed.active"));
                    instance.close();
                }
            }, 500);
        });
    </script>

</body>