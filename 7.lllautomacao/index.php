<!DOCTYPE html>
<html lang="pt-br">

<!-- Favicon -->
<link rel="shortcut icon" href="/imagem/icone/favicon.ico">

<head>

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Site que mostra como se ter energia solar em sua residência ou negócio.">
    <meta name="keywords" content="placa, energia solar, residência, comércio, indústria, sustentabilidade, energia 
        elétrica, inovação, telhado, energia, eletricidade">

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Adicionando CSS -->
    <link rel="stylesheet" href="/css/estilo.css">

    <!-- Título -->
    <title>lll Automação</title>

</head>

<body>



    <!-- TOPO DA PÁGINA -->

    <!-- NAVBAR -->
    <nav class="nav-extended cyan lighten-5">

        <div class="nav-wrapper center">
            <img style="margin-top: 25px;" src="imagem/logo.png" alt="Logo"><br>

            <!-- Redes Sociais -->
            <!-- Tooltipped é o hint -->
            <!-- Whatsapp -->
            <a class="tooltipped" data-position="top" data-tooltip="Whatsapp" href="https://api.whatsapp.com/send?phone=+55019999999999&text=Olá, tudo bem?" target="_blank">
                <img src="imagem/icone/escuro/whatsapp.png" alt="Whatsapp">
            </a>
            <!-- Facebook -->
            <a class="tooltipped" data-position="top" data-tooltip="Facebook" href="https://www.facebook.com" target="_blank">
                <img src="imagem/icone/escuro/facebook.png" alt="Facebook">
            </a>
        </div>

        <!-- Abas -->
        <div class="nav-wrapper" style="padding: 0 10% 0 10%">
            <ul id="tabSelector" class="tabs tabs-transparent tabs-fixed-width">
                <li class="tab"><a href="#inicio" class="active">Início</a></li>
                <li class="tab"><a href="#servico">Serviços</a></li>
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
                        <img src="imagem/img2.jpg">
                        <div class="caption left-align">
                            <h3>Página 1</h3>
                            <h5 class="light grey-text text-lighten-3">
                                Descrição da página 1
                            </h5>
                        </div>
                    </li>

                    <li>
                        <img src="imagem/img3.jpg">
                        <div class="caption left-align">
                            <h3>Página 2</h3>
                            <h5 class="light grey-text text-lighten-3">
                                Descrição da página 2
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
                            <img class="img_principal" src="imagem/img1.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title center">Orçamento</span>
                            <p>Todos nossos orçamentos são gratuitos, sem compromisso e feitos à partir de duas 
                               informações: consumo médio anual em KWh e cidade que será instalado o sistema.</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l6">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img class="img_principal" src="imagem/img4.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title center">Pagamento</span>
                            <p>Nossa empresa é correspondente bancária certificada pela FEBRABAN, dessa forma 
                               financiamos seu sistema 100%, sem burocracia em até 60x no boleto.</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l6">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img class="img_principal" src="imagem/siteConstrucao.png">
                        </div>
                        <div class="card-content">
                            <span class="card-title center">Instalação</span>
                            <p>Contamos com engenharia e equipe de instalação próprias, com profissionais capacitados 
                               para atender residências, comércios e indústrias.</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l6">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img class="img_principal" src="imagem/siteConstrucao.png">
                        </div>
                        <div class="card-content">
                            <span class="card-title center">Homologação</span>
                            <p>Apresentamos e acompanhamos seu projeto em todo processo de homologação junto a 
                               concessionária de energia elétrica de sua região.</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m12 l12">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img class="img_principal" src="imagem/siteConstrucao.png">
                        </div>
                        <div class="card-content">
                            <span class="card-title center">Pós-venda</span>
                            <p>Além da garantia de 25 anos de eficiência de seu sistema, contamos também com 
                               acompanhamento online, do seu sistema solar.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- ABA SERVIÇOS -->
    <div id="servico" class="col s12 container">
        <div class="row">

            <!-- Telefone -->
            <h5 class="espaco_acima">Cabines Primárias</h5>

        </div>
    </div>

    <!-- ABA GALERIA -->
    <div id="galeria" class="container">

        <!-- Produto 1 -->
        <div class="wrapper-carousel">
            <h5 class="espaco_acima">Produto 1</h5>

            <div id="carousel-1" class="carousel">

                <!-- É preciso ter dentro do elemento da classe .carousel um elemento .carousel-item, mesmo que vazio, para que ele possa fazer os cálculos. -->

                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/siteConstrucao.png">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/siteConstrucao.png">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/siteConstrucao.png">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/siteConstrucao.png">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/siteConstrucao.png">
                </div>

            </div>
        </div>

        <!-- Produto 2 -->
        <div class="wrapper-carousel">
            <h5 class="espaco_acima">Produto 2</h5>

            <div id="carousel-2" class="carousel">

                <!-- É preciso ter dentro do elemento da classe .carousel um elemento .carousel-item, mesmo que vazio, para que ele possa fazer os cálculos. -->

                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/siteConstrucao.png">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/siteConstrucao.png">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/siteConstrucao.png">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/siteConstrucao.png">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/siteConstrucao.png">
                </div>
               

            </div>
        </div>

    </div>

    <!-- ABA CONTATO -->
    <div id="contato" class="col s12 container">
        <div class="row">

            <!-- Telefone -->
            <h5 class="espaco_acima">Telefone</h5>
            <a class="hover-laranja cor-padrao" href="tel:19999999999">(19) 9 9999-9999</a>

            <!-- E-mail -->
            <h5 class="espaco_acima">E-mail</h5>
            <a class="hover-laranja cor-padrao" href="mailto:lllautomacao@lllautomacao.com.br">
                lllautomacao@lllautomacao.com.br
            </a>

        </div>
    </div>

    <!-- ABA LOCALIZAÇÃO -->
    <div id="localizacao" class="container">

        <!-- Endereço -->
        <div class="row">
            <h5 class="espaco_acima">Endereço</h5>
            <address>Rua Tal, 999 - Piracicaba, SP - CEP 13.401-999</address>
        </div>

        <!-- Mapa -->
        <div class="row">
            <h5 class="espaco_acima">Mapa</h5>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29436.771212118372!2d-47.68796609584231!3d-22.743237896076803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c6312729672a29%3A0xc0be84300645866e!2sPiracicaba!5e0!3m2!1spt-BR!2sbr!4v1595782534061!5m2!1spt-BR!2sbr" width="100%" height="400" frameborder="0" style="border:0; border-radius: 10px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

    </div>

    <!-- ABA SOBRE -->
    <div id="sobre" class="col s12 container">

        <h5 class="espaco_acima">Sobre nós</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus architecto molestias non quidem eligendi 
           error recusandae aspernatur at voluptate! Nisi, assumenda? Tenetur consequuntur soluta, recusandae placeat 
           consequatur inventore cupiditate quo?
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