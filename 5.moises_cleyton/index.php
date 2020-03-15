<!DOCTYPE html>
<html lang="pt-br">

<!-- Favicon -->
<link rel="shortcut icon" href="/imagem/icone/favicon.ico">

<head>

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Moisés Cleyton é um dos maiores compositores e cantores da música gospel,
                                      é também empresário no ramo de produção musical.">
    <meta name="keywords" content="cantor, compositor, ministro, igreja, convite">

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Adicionando CSS -->
    <link rel="stylesheet" href="/css/estilo.css">

    <!-- Título -->
    <title>Pr Moisés Cleyton - Cantor, compositor e ministro</title>

</head>

<body>



    <!-- TOPO DA PÁGINA -->

    <!-- NAVBAR -->
    <nav class="nav-extended blue darken-4">

        <div class="nav-wrapper center">
            <img style="margin-top: 25px;" src="imagem/logo.png" alt="Logo"><br>

            <!-- Redes Sociais -->
            <!-- Tooltipped é o hint -->
            <!-- Whatsapp -->
            <a class="tooltipped" data-position="top" data-tooltip="Whatsapp" href="https://api.whatsapp.com/send?phone=+55042998142545&text=Olá, tudo bem?" target="_blank">
                <img src="imagem/icone/claro/whatsapp.png" alt="Whatsapp">
            </a>
            <!-- Facebook -->
            <a class="tooltipped" data-position="top" data-tooltip="Facebook" href="https://www.facebook.com/pastormoisescleyton/" target="_blank">
                <img src="imagem/icone/claro/facebook.png" alt="Facebook">
            </a>
            <!-- Instagram -->
            <a class="tooltipped" data-position="top" data-tooltip="Instagram" href="https://www.instagram.com/moisescleyton_oficial/" target="_blank">
                <img src="imagem/icone/claro/instagram.png" alt="Instagram">
            </a>
            <!-- Youtube -->
            <a class="tooltipped" data-position="top" data-tooltip="Youtube" href="https://www.youtube.com/channel/UCPYtuNuCbT-EQzLV3AZRGsg/feed" target="_blank">
                <img src="imagem/icone/claro/youtube.png" alt="Youtube">
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
                        <img src="imagem/img17.jpg">
                        <div class="caption left-align">
                            <h3>Convites</h3>
                            <h5 class="light grey-text text-lighten-3">
                                Estamos com agenda aberta
                            </h5>
                        </div>
                    </li>

                    <li>
                        <img src="imagem/img12.jpg">
                        <div class="caption left-align">
                            <h3>Contato</h3>
                            <h5 class="light grey-text text-lighten-3">
                                Entre em contato
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
                            <img class="img_principal" src="imagem/img1.jpeg">
                        </div>
                        <div class="card-content">
                            <span class="card-title center">Convites</span>
                            <p>Estamos com agenda aberta.</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l6">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img class="img_principal" src="imagem/img3.jpeg">
                        </div>
                        <div class="card-content">
                            <span class="card-title center">Contato</span>
                            <p>Entre em contato.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- ABA GALERIA -->
    <div id="galeria" class="container">

        <div class="wrapper-carousel">
            <h5 class="espaco_acima">Perfil</h5>

            <div id="carousel-1" class="carousel">

                <!-- É preciso ter dentro do elemento da classe .carousel um elemento .carousel-item, mesmo que vazio, para que ele possa fazer os cálculos. -->

                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img10.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img13.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img3.jpeg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img15.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img2.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img11.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img18.jpg">
                </div>

            </div>
        </div>

        <div class="wrapper-carousel">
            <h5 class="espaco_acima">Eventos</h5>

            <div id="carousel-2" class="carousel">

                <!-- É preciso ter dentro do elemento da classe .carousel um elemento .carousel-item, mesmo que vazio, para que ele possa fazer os cálculos. -->

                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img8.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img9.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img12.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img14.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img16.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img17.jpg">
                </div>

            </div>
        </div>

    </div>

    <!-- ABA CONTATO -->
    <div id="contato" class="col s12 container">
        <div class="row">

            <!-- Telefone -->
            <h5 class="espaco_acima">Telefone</h5>
            <a class="hover-azul cor-padrao" href="tel:42998142545">(42) 9 9814-2545</a>

            <!-- E-mail -->
            <h5 class="espaco_acima">E-mail</h5>
            <a class="hover-azul cor-padrao" href="mailto:moises@moisescleyton.com.br">
                moises@moisescleyton.com.br
            </a>

        </div>
    </div>

    <!-- ABA LOCALIZAÇÃO -->
    <div id="localizacao" class="container">

        <!-- Endereço -->
        <div class="row">
            <h5 class="espaco_acima">Endereço</h5>
            <address>Av Jair Machado Nocera, 350 - Centro Telêmaco Borba, PR - CEP 84.261-600</address>
        </div>

        <!-- Mapa -->
        <div class="row">
            <h5 class="espaco_acima">Mapa</h5>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3635.411105970815!2d-50.6205667850076!3d-24.332168184305825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e983388ac1bd95%3A0xbc1fdf615899b043!2sR.%20Jair%20Machado%20Nocera%2C%20350%20-%20Centro%2C%20Tel%C3%AAmaco%20Borba%20-%20PR!5e0!3m2!1spt-BR!2sbr!4v1582157859109!5m2!1spt-BR!2sbr" width="100%" height="400" frameborder="0" style="border:0; border-radius: 10px;" allowfullscreen=""></iframe>
        </div>

    </div>

    <!-- ABA SOBRE -->
    <div id="sobre" class="col s12 container">

        <h5 class="espaco_acima">Moisés Cleyton</h5>
        <p>É um dos maiores compositores e cantores da música gospel, é também empresário no ramo de
            produção musical.</p>
        <p>Casado com Idianara e pai de 3 lindos filhos.</p>
        <p>Nascido em Telêmaco Borba-PR.</p>
        <p>Suas lindas canções são executadas em todo o Brasil e em muitos outros países.</p>

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

    <!-- Carrossel da Galeria -->
    <script>
        $(document).ready(function() {
            $('.tabs').tabs(); // Funcionamento das abas
            $('.slider').slider(); // Slider da página inicial (imagem com as frases)
            $('.materialboxed').materialbox(); // Para as imagens serem expandidas
            $('.tooltipped').tooltip(); // O 'hint' nas Redes Sociais

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
                $('.carousel').carousel();
                $('#carousel-1').carousel();
                $('#carousel-2').carousel();
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