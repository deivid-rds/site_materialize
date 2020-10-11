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
            <a class="tooltipped" data-position="top" data-tooltip="Whatsapp" href="https://api.whatsapp.com/send?phone=+55019998540517&text=Olá, tudo bem?" target="_blank">
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
                            <h3>Energia Solar</h3>
                            <h5 class="light grey-text text-lighten-3">
                                Redução da emissão de CO2, economia de até 95% em sua conta de luz e conta de luz 
                                protegida de aumentos na tarifa
                            </h5>
                        </div>
                    </li>

                    <li>
                        <img src="imagem/img3.jpg">
                        <div class="caption left-align">
                            <h3>Serviços</h3>
                            <h5 class="light grey-text text-lighten-3">
                                Para sua casa, empresa, condomínios e cooperativas
                            </h5>
                        </div>
                    </li>

                </ul>
            </div>

            <!-- Cards principal -->
            <div id="card_principal" class="container">

                <div class="col">

                    <div class="col s12 m6 l6">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img class="img_principal" src="imagem/img1.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title center">1</span>
                                <p>Durante o dia a luz solar (radiação) proveniente do sol, atinge os painéis, é 
                                   absorvida pelas células fotovoltaicas e é convertida em energia elétrica, corrente 
                                   contínua (CC).</p>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m6 l6">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img class="img_principal" src="imagem/img4.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title center">2</span>
                                <p>Essa energia passa pelo Inversor que converte essa corrente contínua (CC) em 
                                   corrente alternada (CA), permitindo que ela seja consumida em casas, indústrias ou 
                                   comércios.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col">

                    <div class="col s12 m6 l6">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img class="img_principal" src="imagem/img5.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title center">3</span>
                                <p>Nesse momento, tudo que estiver sendo utilizado na unidade consumidora (lâmpadas, 
                                   eletrodomésticos, e outros) passa a se abastecer dessa energia.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m6 l6">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img class="img_principal" src="imagem/img6.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title center">4</span>
                                <p>O excedente de energia que foi gerado e não consumido no local é injetado na rede de 
                                   distribuição e gera créditos para o consumidor que podem ser utilizados em até 60 
                                   meses.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <!-- ABA SERVIÇOS -->
    <div id="servico" class="col s12 container">
        <div class="row">

            <div class="row">

                <!-- Cabines Primárias -->
                <div class="espaco_acima col s12 m6">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Cabines Primárias</span>
                            <p>As empresas de manutenção de cabine primária fazem de forma corretiva ou preventiva
                               esta manutenção.</p>
                        </div>
                        <div class="card-action">
                            <a class="modal-trigger" href="#cabine">Saiba mais</a>
                        </div>

                        <!-- Modal -->
                        <div id="cabine" class="modal modal-fixed-footer">
                            <div class="modal-content">
                                <h4>Cabines Primárias</h4>

                                <p>As empresas de manutenção de cabine primária fazem de forma corretiva ou preventiva
                                    esta manutenção. Quando preventiva, é utilizada para que o equipamento mantenha-se
                                    conservado ou para restaurar algum item programado da cabine, e tem o intuito de
                                    mantê-la em boas condições de operação para que continue funcionando de forma
                                    adequada. Esta manutenção é feita de acordo com o que o fabricante ou o engenheiro
                                    da empresa estabelece em relação ao produto. Quando as empresas de manutenção de
                                    cabine primária fazem a manutenção corretiva, é feita para quando um equipamento
                                    está indisponível ou não para uso, para que seja reparado algum dano ou defeito.</p>

                                <p>As empresas de manutenção de cabine primária devem fazer também o relatório de
                                    análise, para definir o estado dos equipamentos e os valores de ensaios físico-
                                    químicos. Se houver alguma alteração de acordo com o relatório anterior, deve ser
                                    analisado se o equipamento está dentro dos valores pré-estabelecidos.</p>

                                <p>Alguns dos serviços feitos pelas empresas de manutenção de Cabine Primária são:</p>
                                <ol>
                                    <li>Manutenção preventiva ou corretiva</li>
                                    <li>Medição de grandezas elétricas</li>
                                    <li>Chaves seccionadoras</li>
                                    <li>Reforma geral</li>
                                    <li>Equipamentos de proteção</li>
                                    <li>Correção do fator de potência</li>
                                    <li>Limpeza</li>
                                    <li>Revisão nos barramentos</li>
                                </ol>

                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Laudos de Medição de SPDA -->
                <div class="espaco_acima col s12 m6">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Laudos de Medição de SPDA</span>
                            <p>O Laudo de SPDA é um relatório técnico das inspeções e medições realizadas no sistema
                               de proteção contra descargas atmosféricas.</p>
                        </div>
                        <div class="card-action">
                            <a class="modal-trigger" href="#laudospda">Saiba mais</a>
                        </div>

                        <!-- Modal -->
                        <div id="laudospda" class="modal modal-fixed-footer">
                            <div class="modal-content">
                                <h4>Laudos de Medição de SPDA</h4>

                                <p>O Laudo de SPDA é um relatório técnico das inspeções e medições realizadas no sistema
                                    de proteção contra descargas atmosféricas, que atesta a sua eficiência com base na ABNT
                                    NBR 5419:2015.</p>

                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="row">

                <!-- Laudos de Medição de Aterramento -->
                <div class="col s12 m6">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Laudos de Medição de Aterramento</span>
                            <p>Fazer o aterramento de um imóvel, seja comercial ou residencial, é uma solução de 
                               segurança contra descargas elétricas atmosféricas.</p>
                        </div>
                        <div class="card-action">
                            <a class="modal-trigger" href="#laudoater">Saiba mais</a>
                        </div>

                        <!-- Modal -->
                        <div id="laudoater" class="modal modal-fixed-footer">
                            <div class="modal-content">
                                <h4>Laudos de Medição de Aterramento</h4>

                                <p>Fazer o aterramento de um imóvel, seja comercial ou residencial, é uma solução de
                                    segurança contra descargas elétricas atmosféricas. Com um projeto de SPDA estrutural
                                    adequado, a energia captada pelos para-raios é conduzida pelas hastes de aterramento
                                    para serem dispersadas no solo, evitando danos elétricos que podem até ser fatais.
                                    Para atestar que instalação está adequada ao tamanho do imóvel e conseguir o AVCB,
                                    deve ser emitido o laudo técnico de aterramento.</p>

                                <p>No entanto, esse laudo técnico de aterramento é muito mais do que a garantia de
                                    que o projeto de instalação e de proteção contra descargas elétricas atmosféricas
                                    está adequadamente executado: esse documento atesta a segurança da vida das
                                    pessoas e do patrimônio. Por essa razão, a análise da instalação e a posterior
                                    emissão do laudo técnico de aterramento devem ser feitos por uma empresa
                                    especializada em serviços de engenharia elétrica.
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Projetos de Instalações Elétricas -->
                <div class="col s12 m6">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Projetos de Instalações Elétricas</span>
                            <p>Elaboramos projetos elétricos por métodos computacionais em conformidade com a ABNT e
                               normas internacionais.</p>
                        </div>
                        <div class="card-action">
                            <a class="modal-trigger" href="#projetoie">Saiba mais</a>
                        </div>

                        <!-- Modal -->
                        <div id="projetoie" class="modal modal-fixed-footer">
                            <div class="modal-content">
                                <h4>Projetos de Instalações Elétricas</h4>

                                <p>Elaboramos projetos elétricos por métodos computacionais em conformidade com a ABNT e
                                    normas internacionais, de acordo com o tipo de projeto que está sendo realizado.
                                    Dentre os tipos na área de engenharia elétrica, somos especializados principalmente nos
                                    listados abaixo:</p>

                                <ol>
                                    <li>Projeto de SPDA</li>
                                    <li>Projeto Luminotécnico</li>
                                    <li>Projeto de Entrada de Energia</li>
                                    <li>Projeto de Instalações Elétricas</li>
                                    <li>Projetos elétricos complementares ou sistemas complementares</li>
                                    <li>Projeto do Sistema de Antena e TV</li>
                                    <li>Projeto de Segurança e CFTV</li>
                                    <li>Projeto de Acionamento e Comandos</li>
                                    <li>Projeto de Iluminação de Emergência</li>
                                </ol>

                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="row">

                <!-- Montagem e Automação Elétrica -->
                <div class="col s12 m6">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Montagem e Automação Elétrica</span>
                            <p>Numa indústria são desenvolvidos projetos para que a rede elétrica dessa indústria não 
                               desenvolva problemas em sem desenvolvimento.</p>
                        </div>
                        <div class="card-action">
                            <a class="modal-trigger" href="#montagem">Saiba mais</a>
                        </div>

                        <!-- Modal -->
                        <div id="montagem" class="modal modal-fixed-footer">
                            <div class="modal-content">
                                <h4>Montagem e Automação Elétrica</h4>

                                <p>Numa indústria são desenvolvidos projetos para que a rede elétrica dessa indústria
                                    não desenvolva problemas em sem desenvolvimento. Para que não ocorram esses
                                    problemas com a rede elétrica industrial são desenvolvidos projetos de montagem.</p>

                                <p>A montagem elétrica industrial é responsável pelos procedimentos feitos desde a
                                    planta da indústria, até as adaptações frente às novas necessidades que surgem na
                                    linha de produção.</p>

                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- ABA GALERIA -->
    <div id="galeria" class="container">

        <!-- Produto 1 -->
        <div class="wrapper-carousel">
            <h5 class="espaco_acima">Placas solares</h5>

            <div id="carousel-1" class="carousel">

                <!-- É preciso ter dentro do elemento da classe .carousel um elemento .carousel-item, mesmo que vazio, para que ele possa fazer os cálculos. -->

                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img7.jpg">
                </div>
                <div class="carousel-item">
                    <img class="materialboxed" src="/imagem/img8.jpg">
                </div>
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

            </div>
        </div>

    </div>

    <!-- ABA CONTATO -->
    <div id="contato" class="col s12 container">
        <div class="row">

            <!-- Telefone -->
            <h5 class="espaco_acima">Telefone</h5>
            <a class="hover-laranja cor-padrao" href="tel:19998540517">(19) 9 9854-0517</a>

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