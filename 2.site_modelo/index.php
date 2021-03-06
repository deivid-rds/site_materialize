<!DOCTYPE html>
<html lang="pt-br">

<!-- Favicon -->
<link rel="shortcut icon" href="/imagem/icone/favicon.ico">

<head>

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Site modelo.">
    <meta name="keywords" content="site, modelo">

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Adicionando CSS -->
    <link rel="stylesheet" href="/css/estilo.css">

    <!-- Título -->
    <title>Site Modelo</title>

</head>

<body>



    <!-- TOPO DA PÁGINA -->

    <!-- NAVBAR -->
    <nav class="nav-extended grey darken-4">

        <div class="nav-wrapper center">
            <img style="margin-top: 25px;" src="imagem/logo.png" alt="Logo"><br>

            <!-- Redes Sociais -->
            <!-- Tooltipped é o hint -->
            <!-- Whatsapp -->
            <a class="tooltipped" data-position="top" data-tooltip="Whatsapp" href="#">
                <img src="imagem/icone/claro/whatsapp.png" alt="Whatsapp">
            </a>
            <!-- Facebook -->
            <a class="tooltipped" data-position="top" data-tooltip="Facebook" href="#">
                <img src="imagem/icone/claro/facebook.png" alt="Facebook">
            </a>
            <!-- Instagram -->
            <a class="tooltipped" data-position="top" data-tooltip="Instagram" href="#">
                <img src="imagem/icone/claro/instagram.png" alt="Instagram">
            </a>
            <!-- Youtube -->
            <a class="tooltipped" data-position="top" data-tooltip="Youtube" href="#">
                <img src="imagem/icone/claro/youtube.png" alt="Youtube">
            </a>
            <!-- Messenger -->
            <a class="tooltipped" data-position="top" data-tooltip="Messenger" href="#">
                <img src="imagem/icone/claro/messenger.png" alt="Messenger">
            </a>
            <!-- Skype -->
            <a class="tooltipped" data-position="top" data-tooltip="Skype" href="#">
                <img src="imagem/icone/claro/skype.png" alt="Skype">
            </a>
            <!-- Twitter -->
            <a class="tooltipped" data-position="top" data-tooltip="Twitter" href="#">
                <img src="imagem/icone/claro/twitter.png" alt="Twitter">
            </a>
        </div>

        <!-- Abas -->
        <div class="nav-wrapper" style="padding: 0 10% 0 10%">
            <ul id="tabSelector" class="tabs tabs-transparent tabs-fixed-width">
                <li class="tab"><a href="#inicio" class="active">Início</a></li>
                <li class="tab"><a href="#galeria">Galeria</a></li>
                <li class="tab"><a href="#contato">Contato</a></li>
                <li class="tab"><a href="#localizacao">Localização</a></li>
                <li class="tab"><a href="#sobre">Sobre</a></li>
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

                    <li>
                        <img src="imagem/img10.jpg">
                        <div class="caption left-align">
                            <h3>Descrição 1</h3>
                            <h5 class="light grey-text text-lighten-3">
                                Descrição sobre esse produto
                            </h5>
                        </div>
                    </li>

                    <li>
                        <img src="imagem/img11.jpg">
                        <div class="caption left-align">
                            <h3>Descrição 2</h3>
                            <h5 class="light grey-text text-lighten-3">
                                Use a criatividade a seu favor
                            </h5>
                        </div>
                    </li>

                </ul>
            </div>

            <!-- Cards principal -->
            <div id="card_principal" class="container">

                <div class="col s12 m6 l6">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img class="img_principal" src="imagem/img4.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title center">Descrição 1</span>
                            <p>Pode ser adiconado maiores informações sobre o produto.</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l6">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img class="img_principal" src="imagem/img9.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title center">Descrição 2</span>
                            <p>Descreva o que ser necessário para valorizar seu produto.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- ABA GALERIA -->
    <div id="galeria" class="container">

        <div class="wrapper-carousel">
            <h5 class="espaco_acima">Galeria 1</h5>

            <div id="carousel-1" class="carousel">

                <!-- É preciso ter dentro do elemento da classe .carousel um elemento .carousel-item, mesmo que vazio, para que ele possa fazer os cálculos. -->

                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img1.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img2.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img3.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img5.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img6.jpg">
                </div>

            </div>
        </div>

        <div class="wrapper-carousel">
            <h5 class="espaco_acima">Galeria 2</h5>

            <div id="carousel-2" class="carousel">

                <!-- É preciso ter dentro do elemento da classe .carousel um elemento .carousel-item, mesmo que vazio, para que ele possa fazer os cálculos. -->

                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img12.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img8.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img7.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img13.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img14.jpg">
                </div>

            </div>
        </div>
    </div>

    <!-- ABA CONTATO -->
    <div id="contato" class="col s12 container">
        <div class="row">

            <!-- Telefone -->
            <h5 class="espaco_acima">Telefone</h5>
            <a class="hover-azul cor-padrao" href="tel:19982785512">(19) 9 8278-5512</a>

            <!-- E-mail -->
            <h5 class="espaco_acima">E-mail</h5>
            <a class="hover-azul cor-padrao" href="mailto:modelo@modelo.sampa.br">
                modelo@modelo.sampa.br
            </a>

        </div>
    </div>

    <!-- ABA LOCALIZAÇÃO -->
    <div id="localizacao" class="container">

        <!-- Endereço -->
        <div class="row">
            <h5 class="espaco_acima">Endereço</h5>
            <address>Rua Sofia, 188 - Piracicaba, SP - CEP 13.401-658</address>
        </div>

        <!-- Mapa -->
        <div class="row">
            <h5 class="espaco_acima">Mapa</h5>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14715.563035804926!2d-47.655361!3d-22.769435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c6308e00f7431b%3A0xb209c29b76c9eabc!2sR.%20Sof%C3%ADa%20-%20Campestre%2C%20Piracicaba%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1582640131560!5m2!1spt-BR!2sbr" width="100%" height="400" frameborder="0" style="border:0; border-radius: 10px;" allowfullscreen=""></iframe>
        </div>

    </div>

    <!-- ABA SOBRE -->
    <div id="sobre" class="col s12 container">

        <h5 class="espaco_acima">Descrição desse modelo</h5>
        <p>Esse site serve de molde para os sites de aluguel que a <a class="hover-azul cor-padrao" href="http://www.draplicacao.com.br/" target="_blank" alt="Site da empresa">DR Aplicação</a> trabalha.</p>

    </div>



    <!-- RODAPÉ -->
    <?php include 'rodape.html'; ?>



    <!-- DEPENDÊNCIAS -->
    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Inicializar Materialize -->
    <script>
        M.AutoInit();
    </script>

    <!-- Inicializar funções diversas -->
    <script>
        $(document).ready(function() {
            $('.tabs').tabs(); // Funcionamento das abas
            $('.slider').slider(); // Slider da página inicial (imagem com as frases)
            $('.materialboxed').materialbox(); // Para as imagens serem expandidas
            $('.tooltipped').tooltip(); // O 'hint' nas Redes Sociais
            $('.carousel').carousel(); // Funcionamento do Carousel

            // Chamar links do Menu do rodapé 
            $('.links-rodape > .links > a').on('click', function(e) {
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
                $('#carousel-1').carousel();
                $('#carousel-2').carousel();
            };

            subir(true);

            // Resolver problema onde um carousel sobressai a outro (Parte 2)
            $('.wrapper-carousel').on('click', function() {
                $('.wrapper-carousel').css('z-index', 0);
                $(this).css('z-index', 9999);
            });

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