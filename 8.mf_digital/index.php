<!DOCTYPE html>
<html lang="pt-br">

<!-- Favicon -->
<link rel="shortcut icon" href="/imagem/icone/favicon.ico">

<head>

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Somos uma agência especializada em marketing digital, criação de arte e 
                                      produtos gráficos.">
    <meta name="keywords" content="marketing, arte digital, gestão de redes sociais, cartões de visita, panfletos, 
                                   banners, cartões fidelidade, adesivos, cardápios, digital influencer, logomarca,
                                   instagram ads, facebook ads, google adwords, consultoria">

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Adicionando CSS -->
    <link rel="stylesheet" href="/css/estilo.css">

    <!-- Título -->
    <title>MF Marketing Digital</title>

</head>

<body>



    <!-- TOPO DA PÁGINA -->

    <!-- NAVBAR -->
    <nav class="nav-extended grey lighten-4">

        <div class="nav-wrapper center">
            <img style="margin-top: 25px;" src="imagem/logo.png" alt="Logo"><br>

            <!-- Redes Sociais -->
            <!-- Tooltipped é o hint -->
            <!-- Whatsapp -->
            <a class="tooltipped" data-position="top" data-tooltip="Whatsapp" href="https://api.whatsapp.com/send?phone=+55019988368289&text=Olá, tudo bem?" target="_blank">
                <img src="imagem/icone/escuro/whatsapp.png" alt="Whatsapp">
            </a>
            <!-- Facebook -->
            <a class="tooltipped" data-position="top" data-tooltip="Facebook" href="https://m.facebook.com/MFmktdital/" target="_blank">
                <img src="imagem/icone/escuro/facebook.png" alt="Facebook">
            </a>
            <!-- Instagram -->
            <a class="tooltipped" data-position="top" data-tooltip="Instagram" href="https://www.instagram.com/agenciamf__/" target="_blank">
                <img src="imagem/icone/escuro/instagram.png" alt="Instagram">
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
                        <img src="imagem/capa1.jpg">
                    </li>

                    <li>
                        <img src="imagem/capa2.jpg">
                    </li>

                    <li>
                        <img src="imagem/capa3.jpg">
                    </li>

                    <li>
                        <img src="imagem/capa4.jpg">
                    </li>

                </ul>
            </div>

            <!-- Serviços oferecidos -->
            <div class="container grey lighten-4">
                <ul class="collapsible">
                    <li class="active">
                        <div class="collapsible-header grey lighten-3"><i class="material-icons">shop</i>Produtos</div>
                        <div class="collapsible-body">
                            <p>- Banners</p>
                            <p>- Cartões de visita</p>
                            <p>- Panfletos</p>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header grey lighten-3"><i class="material-icons">show_chart</i>Serviços</div>
                        <div class="collapsible-body">
                            <p>- Gestão de Redes Sociais</p>
                            <p>- Google Adwords</p>
                            <p>- Instagram e Facebook ADS</p>
                            <p>- Consultoria</p>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <!-- ABA GALERIA -->
    <div id="galeria" class="container">

        <!-- Produtos -->
        <div class="wrapper-carousel">
            <h5 class="espaco_acima">Marketing</h5>

            <div id="carousel-1" class="carousel">

                <!-- É preciso ter dentro do elemento da classe .carousel um elemento .carousel-item, mesmo que vazio, para que ele possa fazer os cálculos. -->

                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/card1.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/card2.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/card3.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/card4.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/card5.jpg">
                </div>

            </div>
        </div>

    </div>

    <!-- ABA CONTATO -->
    <div id="contato" class="col s12 container">
        <div class="row">

            <!-- Telefone -->
            <h5 class="espaco_acima">Telefone</h5>
            <a class="hover-verde cor-padrao" href="tel:19988368289">(19) 9 8836-8289</a>

            <!-- E-mail -->
            <h5 class="espaco_acima">E-mail</h5>
            <a class="hover-verde cor-padrao" href="mailto:messias@agenciamf.com">
                messias@agenciamf.com
            </a>

        </div>
    </div>

    <!-- ABA LOCALIZAÇÃO -->
    <div id="localizacao" class="container">

        <!-- Endereço -->
        <div class="row">
            <h5 class="espaco_acima">Endereço</h5>
            <address>Travessa Cabo Julio, 30 - Piracicaba, SP - CEP 13424-042</address>
        </div>

        <!-- Mapa -->
        <div class="row">
            <h5 class="espaco_acima">Mapa</h5>
            <iframe src="https://www.google.com/maps/embed?pb=!4v1597670829744!6m8!1m7!1sianb79zP02Na8ZYLMkKV0Q!2m2!1d-22.74062732304717!2d-47.65131280012178!3f316.51186043863487!4f1.8520958338871907!5f0.7820865974627469" width="100%" height="400" frameborder="0" style="border:0; border-radius: 10px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

    </div>

    <!-- ABA SOBRE -->
    <div id="sobre" class="col s12 container">

        <h5 class="espaco_acima">Sobre nós</h5>
        <p>
            Somos uma agência especializada em marketing digital, criação de arte e produtos gráficos.
            Estamos a 3 anos no mercado ajudando empresas a ganharem visibilidade através das mídias sociais.
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

    <script>
        $(document).ready(function() {
            $('.tabs').tabs(); // Funcionamento das abas
            $('.slider').slider(); // Slider da página inicial (imagem com as frases)
            $('.materialboxed').materialbox(); // Para as imagens serem expandidas
            $('.tooltipped').tooltip(); // O 'hint' nas Redes Sociais
            $('.collapsible').collapsible(); // Produtos e Serviços na tela inicial

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