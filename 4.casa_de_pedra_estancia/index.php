<!DOCTYPE html>
<html lang="pt-br">

<!-- Favicon -->
<link rel="shortcut icon" href="/imagem/icone/favicon.ico">

<head>

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Somos uma empresa familiar com um local muito espaçoso com 10 piscinas, 
          tobogãs,chalés para hospedagem e cardápio variado com almoço e café da manha inclusos em pacotes.">
    <meta name="keywords" content="cardápio, alimento, almoço, café da manhã, estalagem, hospedagem, pousada, 
          repouso, hotel, chalé, lazer, piscina">

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Adicionando CSS -->
    <link rel="stylesheet" href="/css/estilo.css">

    <!-- Título -->
    <title>Casa de Pedra Estância - Turismo Rural</title>

</head>

<body>



    <!-- TOPO DA PÁGINA -->

    <!-- NAVBAR -->
    <nav class="nav-extended orange accent-4">

        <div class="nav-wrapper center">
            <img style="margin-top: 25px;" src="imagem/logo.png" alt="Logo"><br>

            <!-- Redes Sociais -->
            <!-- Tooltipped é o hint -->
            <!-- Whatsapp -->
            <a class="tooltipped" data-position="top" data-tooltip="Whatsapp" href="https://api.whatsapp.com/send?phone=+55019992599789&text=Olá, tudo bem?" target="_blank">
                <img src="imagem/icone/claro/whatsapp.png" alt="Whatsapp"></a>
            <!-- Facebook -->
            <a class="tooltipped" data-position="top" data-tooltip="Facebook" href="https://www.facebook.com/estanciacasadepedra/" target="_blank">
                <img src="imagem/icone/claro/facebook.png" alt="Facebook"></a>
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
                        <img src="imagem/banner3.jpeg">
                        <div class="caption left-align">
                            <h3>Para você</h3>
                            <h5 class="light grey-text text-lighten-3">
                                Tenha os melhores momentos com seus familiares e amigos
                            </h5>
                        </div>
                    </li>

                    <li>
                        <img src="imagem/banner2.jpeg">
                        <div class="caption left-align">
                            <h3>Excursão</h3>
                            <h5 class="light grey-text text-lighten-3">
                                Aproveite nossas acomodações e nosso ambiente para descansar e se divertir
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
                            <img class="img_principal" src="imagem/frente1.jpeg">
                        </div>
                        <div class="card-content">
                            <span class="card-title center">Para você</span>
                            <p>Tenha os melhores momentos com seus familiares e amigos.</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l6">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img class="img_principal" src="imagem/frente2.jpeg">
                        </div>
                        <div class="card-content">
                            <span class="card-title center">Excursão</span>
                            <p>Aproveite nossas acomodações e nosso ambiente para descansar e se divertir.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- ABA GALERIA -->
    <div id="galeria" class="container">

        <div class="wrapper-carousel">
            <h5 class="espaco_acima">Hospedagens</h5>

            <div id="carousel-1" class="carousel">

                <!-- É preciso ter dentro do elemento da classe .carousel um elemento .carousel-item, mesmo que vazio, para que ele possa fazer os cálculos. -->

                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/hopedagem1.jpeg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/hopedagem2.jpeg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/hopedagem3.jpeg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/hopedagem4.jpeg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/hopedagem5.jpeg">
                </div>

            </div>
        </div>

        <div class="wrapper-carousel">
            <h5 class="espaco_acima">Toboáguas</h5>

            <div id="carousel-2" class="carousel">
                <!-- id="fotos" -->

                <!-- É preciso ter dentro do elemento da classe .carousel um elemento .carousel-item, mesmo que vazio, para que ele possa fazer os cálculos. -->

                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/toboagua1.jpeg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/toboagua2.jpeg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/toboagua3.jpeg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/toboagua4.jpeg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/toboagua5.jpeg">
                </div>

            </div>
        </div>

        <div class="wrapper-carousel">
            <h5 class="espaco_acima">Eventos</h5>

            <div id="carousel-3" class="carousel">

                <!-- É preciso ter dentro do elemento da classe .carousel um elemento .carousel-item, mesmo que vazio, para que ele possa fazer os cálculos. -->

                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/evento1.jpeg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/evento2.jpeg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/evento3.jpeg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/evento4.jpeg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/evento5.jpeg">
                </div>

            </div>
        </div>

    </div>

    <!-- ABA CONTATO -->
    <div id="contato" class="col s12 container">
        <div class="row">

            <!-- Telefone -->
            <h5 class="espaco_acima">Telefone</h5>
            <a class="hover-laranja cor-padrao" href="tel:19992599789">(19) 9 9259-9789</a>

            ou

            <a class="hover-laranja cor-padrao" href="tel:1931863689">(19) 3186-3689</a>

            <!-- E-mail -->
            <h5 class="espaco_acima">E-mail</h5>
            <a class="hover-laranja cor-padrao" href="mailto:casadepedra@casadepedraestancia.com">
                casadepedra@casadepedraestancia.com
            </a>

        </div>
    </div>

    <!-- ABA LOCALIZAÇÃO -->
    <div id="localizacao" class="container">

        <!-- Endereço -->
        <div class="row">
            <h5 class="espaco_acima">Endereço</h5>
            <address>Rodovia Piracicaba Charqueada, km 184, s/n - Vila Santa Luzia, Charqueada - SP, 13515-970</address>
        </div>

        <!-- Mapa -->
        <div class="row">
            <h5 class="espaco_acima">Mapa</h5>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14734.471913188105!2d-47.7152847!3d-22.5933871!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa70599a11d3135d3!2sCasa%20de%20pedra!5e0!3m2!1spt-BR!2sbr!4v1580385119715!5m2!1spt-BR!2sbr" width="100%" height="400" frameborder="0" style="border:0; border-radius: 10px;" allowfullscreen=""></iframe>
        </div>

    </div>

    <!-- ABA SOBRE -->
    <div id="sobre" class="col s12 container">

        <h5 class="espaco_acima">Empresa</h5>
        <p>A Casa de Pedra Estância é um parque aquático incrível localizado em Charqueda.</p>
        <p>Contamos com um local muito espaçoso com 10 piscinas, tobogãs, chalés para hospedagem, cardápio variado com
            almoço e café da manhã inclusos em pacotes.</p>
        <p>Somos uma empresa familiar que tem como objetivo proporcionar excelência no atendimento e uma experiência
            prazerosa para você, sua família e amigos.</p>
        <p>Entre em contato conosco e agende já sua visita.</p>

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