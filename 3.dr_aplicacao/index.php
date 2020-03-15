<!DOCTYPE html>
<html lang="pt-br">

<!-- Favicon -->
<link rel="shortcut icon" href="/imagem/icone/favicon.ico">

<head>

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Aluguel de sites com preços acessíveis.">
    <meta name="keywords" content="aluguel, site, barato, acessível">

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Adicionando CSS -->
    <link rel="stylesheet" href="/css/estilo.css">

    <!-- Título -->
    <title>DR Aplicação</title>

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
            <a class="tooltipped" data-position="top" data-tooltip="Whatsapp" href="https://api.whatsapp.com/send?phone=+55019982785512&text=Olá, tudo bem?" target="_blank">
                <img src="imagem/icone/claro/whatsapp.png" alt="Whatsapp">
            </a>
            <!-- Skype -->
            <a class="tooltipped" data-position="top" data-tooltip="Skype" href="https://join.skype.com/invite/AJQkSEWbg8E3" target="_blank">
                <img src="imagem/icone/claro/skype.png" alt="Skype">
            </a>
            <!-- Linkedin -->
            <a class="tooltipped" data-position="top" data-tooltip="Linkedin" href="https://www.linkedin.com/in/deivid-souza-5a395448" target="_blank">
                <img src="imagem/icone/claro/linkedin.png" alt="Linkedin">
            </a>
        </div>

        <!-- Abas -->
        <div class="nav-wrapper" style="padding: 0 10% 0 10%">
            <ul id="tabSelector" class="tabs tabs-transparent tabs-fixed-width">
                <li class="tab"><a href="#inicio" class="active">Início</a></li>
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
                        <img src="imagem/img5.jpg">
                        <div class="caption left-align">
                            <h3>Conheça mais sobre nosso produto</h3>
                            <h5 class="light grey-text text-lighten-3">
                                Alugamos o site para seu negócio e cobramos um preço justo
                            </h5>
                        </div>
                    </li>

                    <li>
                        <img src="imagem/img9.jpg">
                        <div class="caption left-align">
                            <h3>Valorizamos sua indicação</h3>
                            <h5 class="light grey-text text-lighten-3">
                                Ganhe uma porcentagem mensal nos indicando
                            </h5>
                        </div>
                    </li>

                    <li>
                        <img src="imagem/img4.jpg">
                        <div class="caption left-align">
                            <h3>Anúncio</h3>
                            <h5 class="light grey-text text-lighten-3">
                                Breve estaremos expandindo nossos serviços e construindo apps sob demanda
                            </h5>
                        </div>
                    </li>

                </ul>
            </div>

            <!-- Cards principal -->
            <div id="card_principal" class="container espaco-top">

                <!-- Tire suas dúvidas -->
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card grey darken-4">
                            <div class="card-content">
                                <span class="card-title titulo-card">Tire suas dúvidas</span>
                                <p class="descricao-card">Por que seu negócio precisa de um site ou de um aplicativo?
                                    Confira abaixo.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Por que ter um site? -->
                <div class="col s12 m6 l6">
                    <div class="card small hoverable">
                        <div class="card-image">
                            <img class="img_principal" src="imagem/img1.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title center">Por que ter um site?</span>
                        </div>
                        <div class="card-action center">
                            <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Saiba mais</a>

                            <!-- Modal - Por que ter um site? -->
                            <div id="modal1" class="modal">
                                <div class="modal-content">

                                    <h5>Oito motivos para ter um site</h5>

                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>1)</td>
                                                <td>O seu negócio aberto 24 horas do dia, durante os 365 dias do
                                                    ano;</td>
                                            </tr>
                                            <tr>
                                                <td>2)</td>
                                                <td>Apresenta uma imagem profissional – uma excelente maneira de
                                                    induzir confiança e credibilidade;</td>
                                            </tr>
                                            <tr>
                                                <td>3)</td>
                                                <td>É possível desenvolver um marketing mais eficiente e econômico
                                                    do seu produto ou serviço;</td>
                                            </tr>
                                            <tr>
                                                <td>4)</td>
                                                <td>O seu catálogo ou portfólio pode ser alterado a qualquer
                                                    momento – é fácil, econômico e mais rápido de alterar que o
                                                    material impresso;</td>
                                            </tr>
                                            <tr>
                                                <td>5)</td>
                                                <td>O seu mercado passa a ter o potencial para ser visto por milhões
                                                    em todo o mundo;</td>
                                            </tr>
                                            <tr>
                                                <td>6)</td>
                                                <td>Fortalecimento da marca – construir uma marca de valor pode
                                                    levar muito tempo e demandar um grande esforço, porém a Internet
                                                    pode encurtar um pouco este caminho;</td>
                                            </tr>
                                            <tr>
                                                <td>7)</td>
                                                <td>Os investimentos são baixíssimos, levando em consideração o
                                                    alcance geográfico, tempo de exposição e flexibilidade na
                                                    manutenção;</td>
                                            </tr>
                                            <tr>
                                                <td>8)</td>
                                                <td>É possível reunir todas as Redes Sociais.</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <p class="left"><b>Fonte:</b>
                                        https://www.hostnet.com.br/blog/10-motivos-para-voce-ter-um-site/
                                    </p>

                                </div>

                                <div class="modal-footer">
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat titulo-card">Ok</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Por que ter um aplicativo? -->
                <div class="col s12 m6 l6">
                    <div class="card small hoverable">
                        <div class="card-image">
                            <img class="img_principal" src="imagem/img2.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title center">Por que ter um aplicativo?</span>
                            <p>Separamos 8 motivos para você investir em um app.</p>
                        </div>
                        <div class="card-action center">
                            <a class="waves-effect waves-light btn modal-trigger" href="#modal2">Saiba mais</a>

                            <!-- Modal - Por que ter um app -->
                            <div id="modal2" class="modal">
                                <div class="modal-content">

                                    <h5>Oito motivos para ter um app</h5>

                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>1)</td>
                                                <td>Fidelização de clientes: quem baixar seu aplicativo lembrará da sua
                                                    marca sempre que precisar de algo relacionado aos seus
                                                    serviços;</td>
                                            </tr>
                                            <tr>
                                                <td>2)</td>
                                                <td>Relacionamento: por ter criado um laço de fidelidade, a imagem da
                                                    marca estará fortalecida;</td>
                                            </tr>
                                            <tr>
                                                <td>3)</td>
                                                <td>Promoções: Notificações de promoções faz o cliente entender
                                                    que ele tem vantagens recorrentes de manter o aplicativo em seu
                                                    celular;</td>
                                            </tr>
                                            <tr>
                                                <td>4)</td>
                                                <td>Eventos: divulgar eventos promovidos ou sediados pela sua empresa
                                                    fica muito mais fácil com notificações;</td>
                                            </tr>
                                            <tr>
                                                <td>5)</td>
                                                <td>Lançamentos: notifique seus clientes em primeira mão do lançamento
                                                    de produtos ou serviços;</td>
                                            </tr>
                                            <tr>
                                                <td>6)</td>
                                                <td>Facilidade de obter informações: localização, horário de
                                                    funcionamento, particularidades dos serviços, cardápios/menu,
                                                    e-mail, telefone de contato, entre outros;</td>
                                            </tr>
                                            <tr>
                                                <td>7)</td>
                                                <td>Canal de sugestões: oportunidade de melhoria de serviços prestados
                                                    através de um canal direto com o consumidor;</td>
                                            </tr>
                                            <tr>
                                                <td>8)</td>
                                                <td>Encurtar caminhos: para se obter reservas, marcar visitas, tirar
                                                    uma dúvida ou até notificar uma eventual mudança;</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <p class="left"><b>Fonte:</b>
                                        https://geracaointerativa.com.br/noticias-marketing-digital/293-10-motivos-para-a-minha-empresa-ter-um-aplicativo.html
                                    </p>

                                </div>

                                <div class="modal-footer">
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat titulo-card">Ok</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- O que te oferecemos? -->
                <div class="row">
                    <div class="col s12 m12 l12 espaco-top">
                        <div class="card grey darken-4">
                            <div class="card-content">
                                <span class="card-title titulo-card">O que te oferecemos?</span>
                                <p class="descricao-card">Não é necessário se preocupar com nada, oferecemos os
                                    principais serviços web para seu negócio, como domínio, hospedagem de site, conta
                                    de e-mail e SSL. Saiba mais sobre eles a seguir.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Domínio -->
                <div class="col s12 m6 l6">
                    <div class="card small hoverable">
                        <div class="card-image">
                            <img class="img_principal" src="imagem/img6.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title center">Domínio</span>
                            <p>Tenha seu próprio domínio web.</p>
                        </div>

                        <div class="card-action center">
                            <a class="waves-effect waves-light btn modal-trigger" href="#modal3">Saiba mais</a>

                            <!-- Modal - Domínio -->
                            <div id="modal3" class="modal">
                                <div class="modal-content">

                                    <h5>Domínio</h5>

                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Domínio é o endereço que seus visitantes vão usar para chegar até
                                                    você.</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                                <div class="modal-footer">
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat titulo-card">Ok</a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- Hospedagem de site -->
                <div class="col s12 m6 l6">
                    <div class="card small hoverable">
                        <div class="card-image">
                            <img class="img_principal" src="imagem/img7.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title center">Hospedagem de site</span>
                            <p>Tenha seu próprio armazenamento web.</p>
                        </div>

                        <div class="card-action center">
                            <a class="waves-effect waves-light btn modal-trigger" href="#modal4">Saiba mais</a>

                            <!-- Modal - Hospedagem de site -->
                            <div id="modal4" class="modal">
                                <div class="modal-content">

                                    <h5>Hospedagem de site</h5>

                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Hospedagem de sites é responsável por armazenar os arquivos do seu
                                                    site.</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                                <div class="modal-footer">
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat titulo-card">Ok</a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- Conta de e-mail -->
                <div class="col s12 m6 l6">
                    <div class="card small hoverable">
                        <div class="card-image">
                            <img class="img_principal" src="imagem/img8.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title center">Conta de e-mail</span>
                            <p>Tenha sua própria conta de e-mail.</p>
                        </div>

                        <div class="card-action center">
                            <a class="waves-effect waves-light btn modal-trigger" href="#modal5">Saiba mais</a>

                            <!-- Modal - Conta de e-mail -->
                            <div id="modal5" class="modal">
                                <div class="modal-content">

                                    <h5>Conta de e-mail</h5>

                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Será possível criar uma ou mais contas de e-mail profissional,
                                                    usando o seu domínio, por exemplo: seunome@seudominio.com. Isto
                                                    transmite mais credibilidade para sua marca.</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                                <div class="modal-footer">
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat titulo-card">Ok</a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- SSL -->
                <div class="col s12 m6 l6">
                    <div class="card small hoverable">
                        <div class="card-image">
                            <img class="img_principal" src="imagem/img3.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title center">SSL</span>
                            <p>Que seu site tenha mais segurança.</p>
                        </div>

                        <div class="card-action center">
                            <a class="waves-effect waves-light btn modal-trigger" href="#modal6">Saiba mais</a>

                            <!-- Modal - SSL -->
                            <div id="modal6" class="modal">
                                <div class="modal-content">

                                    <h5>SSL</h5>

                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Secure Socket Layer, ou SSL, é uma camada de proteção entre seu
                                                    site e os dados que circulam pelo navegador do usuário. A
                                                    tecnologia codifica os dados e reduz os riscos de interceptação
                                                    e uso mal intencionado.<br><br>

                                                    Sites sem o certificado são marcados como não seguros pelos
                                                    navegadores.</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                                <div class="modal-footer">
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat titulo-card">Ok</a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- ABA CONTATO -->
    <div id="contato" class="col s12 container">
        <div class="row">

            <!-- Telefone -->
            <h5 class="espaco-top">Telefone</h5>
            <a class="hover-azul cor-padrao" href="tel:19982785512">(19) 9 8278-5512</a>

            <!-- E-mail -->
            <h5 class="espaco-top">E-mail</h5>
            <a class="hover-azul cor-padrao" href="mailto:deivid@draplicacao.com.br">
                deivid@draplicacao.com.br
            </a>

        </div>
    </div>

    <!-- ABA LOCALIZAÇÃO -->
    <div id="localizacao" class="container">

        <!-- Endereço -->
        <div class="row">
            <h5 class="espaco-top">Endereço</h5>
            <address>Rua Sofia, 188 - Piracicaba, SP - CEP 13.401-658</address>
        </div>

        <!-- Mapa -->
        <div class="row">
            <h5 class="espaco-top">Mapa</h5>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14715.563035804926!2d-47.655361!3d-22.769435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c6308e00f7431b%3A0xb209c29b76c9eabc!2sR.%20Sof%C3%ADa%20-%20Campestre%2C%20Piracicaba%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1582640131560!5m2!1spt-BR!2sbr" width="100%" height="400" frameborder="0" style="border:0; border-radius: 10px;" allowfullscreen=""></iframe>
        </div>

    </div>

    <!-- ABA SOBRE -->
    <div id="sobre" class="col s12 container">

        <h5 class="espaco-top">Sobre nós</h5>

        <p>Nascemos com o objetivo de facilitar pequenos negócios a dar mais um passo para que seu produto ou serviço
           fique acessível de maneira ainda mais profissional. Com isso em mente, montamos um molde de site moderno
           para que atenda grande parte dos mercados.
        </p>
        <p>Alugamos nosso site com preço coerente para negócios familiares, microempreendedor individual, 
           microempresas, empresa de pequeno e médio porte.
        </p>
        <p>Ainda, quem nos indicar e o negócio for garantido, pagaremos um valor mensal ao que indicou como uma forma de
           agradecimento (continuará recebendo mensalmente enquanto o indicado for nosso cliente).
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
            $('.modal').modal(); // Abrir o modal

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

            tabs.options.onShow = function() {
                $('.carousel').carousel();
            };

            subir(true);

        })

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
    </script>

</body>