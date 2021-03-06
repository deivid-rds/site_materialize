<!DOCTYPE html>
<html lang="pt-br">

<!-- Favicon -->
<link rel="shortcut icon" href="/imagem/icone/favicon.ico">

<head>

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Site que demonstrará os itens vendidos na loja física, que são da livraria, 
        panela, Natura e Boticário.">
    <meta name="keywords" content="site, livraria, livros, bíblias, harpas, evangélico, panela, forma, natura, 
        boticário, perfume, creme">

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Adicionando CSS -->
    <link rel="stylesheet" href="/css/estilo.css">

    <!-- Título -->
    <title>Empório Belém</title>

</head>

<body>



    <!-- TOPO DA PÁGINA -->

    <!-- NAVBAR -->
    <nav class="nav-extended teal accent-2">

        <div class="nav-wrapper center">
            <img style="margin-top: 25px;" src="imagem/logo.png" alt="Logo"><br>

            <!-- Redes Sociais -->
            <!-- Tooltipped é o hint -->
            <!-- Whatsapp -->
            <a class="tooltipped" data-position="top" data-tooltip="Whatsapp" href="https://api.whatsapp.com/send?phone=+55019997913578&text=Olá, tudo bem?" target="_blank">
                <img src="imagem/icone/escuro/whatsapp.png" alt="Whatsapp">
            </a>
            <!-- Facebook -->
            <a class="tooltipped" data-position="top" data-tooltip="Facebook" href="https://www.facebook.com/profile.php?id=100005098655106" target="_blank">
                <img src="imagem/icone/escuro/facebook.png" alt="Facebook">
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
                        <img src="imagem/img1.jpg">
                        <div class="caption left-align">
                            <h3>Livraria evangélica</h3>
                            <h5 class="light grey-text text-lighten-3">
                                Leia um bom livro
                            </h5>
                        </div>
                    </li>

                    <li>
                        <img src="imagem/img3.jpg">
                        <div class="caption left-align">
                            <h3>Panela e forma</h3>
                            <h5 class="light grey-text text-lighten-3">
                                Conheça nossas diversas opções
                            </h5>
                        </div>
                    </li>

                    <li>
                        <img src="imagem/img2.jpeg">
                        <div class="caption left-align">
                            <h3>Natura</h3>
                            <h5 class="light grey-text text-lighten-3">
                                Bem Estar Bem
                            </h5>
                        </div>
                    </li>

                    <li>
                        <img src="imagem/img4.jpeg">
                        <div class="caption left-align">
                            <h3>Boticário</h3>
                            <h5 class="light grey-text text-lighten-3">
                                A vida é bonita, mas pode ser linda
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
                            <img class="img_principal" src="imagem/img7.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title center">Livraria evangélica</span>
                            <p>Bíblias, harpas, livros e mais.</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l6">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img class="img_principal" src="imagem/img6.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title center">Panela e forma</span>
                            <p>Panelas, formas, bules e mais.</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l6">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img class="img_principal" src="imagem/img8.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title center">Natura</span>
                            <p>Toda a gama de opções Natura.</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l6">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img class="img_principal" src="imagem/img5.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title center">Boticário</span>
                            <p>O universo Boticário próximo de você.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- ABA GALERIA -->
    <div id="galeria" class="container">

        <!-- Livraria evangélica -->
        <div class="wrapper-carousel">
            <h5 class="espaco_acima">Livraria evangélica</h5>

            <div id="carousel-1" class="carousel">

                <!-- É preciso ter dentro do elemento da classe .carousel um elemento .carousel-item, mesmo que vazio, para que ele possa fazer os cálculos. -->

                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img9.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img10.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img11.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img12.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img34.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img13.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img14.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img15.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img16.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img17.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img18.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img19.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img20.jpg">
                </div>

            </div>
        </div>

        <!-- Panela e forma -->
        <div class="wrapper-carousel">
            <h5 class="espaco_acima">Panela e forma</h5>

            <div id="carousel-2" class="carousel">

                <!-- É preciso ter dentro do elemento da classe .carousel um elemento .carousel-item, mesmo que vazio, para que ele possa fazer os cálculos. -->

                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img35.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img36.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img37.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img38.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img39.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img40.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img41.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img42.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img43.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img44.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img45.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img46.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img47.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img48.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img49.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img50.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img51.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img52.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img53.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img54.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img55.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img56.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img57.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img58.jpg">
                </div>

            </div>
        </div>

        <!-- Natura -->
        <div class="wrapper-carousel">
            <h5 class="espaco_acima">Natura</h5>

            <div id="carousel-3" class="carousel">

                <!-- É preciso ter dentro do elemento da classe .carousel um elemento .carousel-item, mesmo que vazio, para que ele possa fazer os cálculos. -->

                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img21.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img22.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img23.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img24.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img25.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img26.jpg">
                </div>

            </div>
        </div>

        <!-- Boticário -->
        <div class="wrapper-carousel">
            <h5 class="espaco_acima">Boticário</h5>

            <div id="carousel-4" class="carousel">

                <!-- É preciso ter dentro do elemento da classe .carousel um elemento .carousel-item, mesmo que vazio, para que ele possa fazer os cálculos. -->

                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img27.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img28.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img29.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img30.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img31.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img32.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img33.jpg">
                </div>

            </div>
        </div>

    </div>

    <!-- ABA CONTATO -->
    <div id="contato" class="col s12 container">
        <div class="row">

            <!-- Telefone -->
            <h5 class="espaco_acima">Telefone</h5>
            <a class="hover-laranja cor-padrao" href="tel:19997913578">(19) 9 9791-3578</a>

            <!-- E-mail -->
            <h5 class="espaco_acima">E-mail</h5>
            <a class="hover-laranja cor-padrao" href="mailto:jose@emporiobelem.com.br">
                jose@emporiobelem.com.br
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

        <h5 class="espaco_acima">Sobre nós</h5>
        <p>Nascemos em 1999 com o intuito de facilitar aos cristãos materiais bíblicos. O tempo passou,
            então vimos um mercado cada vez mais crescente de panelas e formas, produtos Natura e Boticário,
            pois isso, optamos por também adquiri-los e assim termos um ambiente de fácil acesso a diversos
            produtos num mesmo local.
        </p>

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
                $('#carousel-3').carousel();
                $('#carousel-4').carousel();
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