// LISTAR
function listar_acomodacao() {
    $.get({

        // url_base está vindo do arquivo /js/configuracoes.js
        url: url_base + '/webservice/acomodacao/listar.php',
        beforeSend: function () {
            // coloco um preload spinner
            var spinner = $('#spinner').html();
            $('#lista_acom').append(spinner);
        },
    }).done(function (resposta) {

        $('#lista_acom').html('');   // removo o spinner

        // converto o json em um array
        var lista_acomodacao = JSON.parse(resposta);

        // percorro o array
        lista_acomodacao.map(function (acomodacao, indice) {
            var id = 'campo_' + indice;

            // copia o html que esta dentro da div modelo
            // armazena como string
            var tr = $('#modelo_acom').html();

            // substituo placeholders (valores coringa) pelos dados do banco
            tr = tr.replace(/%COD%/g, acomodacao.id_quarto);
            tr = tr.replace(/%TIT%/g, acomodacao.titulo);
            tr = tr.replace(/%DESC%/g, acomodacao.descricao);
            
            // se não tiver uma imagem no banco de dados, será adicionada uma padrão
            var img_url = acomodacao.imagem;
            if(img_url == '')
            {
                img_url = url_base + '/imagem/logo_original.png';
            }

            tr = tr.replace('%IMG%', url_base + '/imagem/' + img_url);

            // convertendo a string em elemento html
            var dom = $(tr).get(0);

            $(dom).data('acom', acomodacao);
            $(dom).find('a[href="#modal1_editar"]').data('acom', acomodacao);

            // adiciona o tr na tela
            $('#lista_acom').append(dom);
        });

        // Inicializa o carrossel
        $('.carousel').carousel();

    });
}

// CADASTRAR
function cadastrar_acomodacao() {
    var form = $('#form_acomodacao_novo').get(0);
    var dados = new FormData(form);

    $.post({

        // url_base está vindo do arquivo /js/configuracoes.js
        url: url_base + '/webservice/acomodacao/inserir.php',
        data: dados,
        processData: false,
        contentType: false,

    }).done(function (resposta) {
        var resultado = JSON.parse(resposta);

        if (resultado.erro) {
            alert(resultado.erro);
        }
        else {
            alert('Acomodação cadastrada com sucesso.');

            listar_acomodacao();                // Atualizar a lista

            $('#modal1_novo').modal('close');   // Fechar modal
        }

    })
}

// ALTERAR (PARTE 1)
function alterar(elemento, e) {
    e.preventDefault();  //impede que o navegador efetue qualquer ação
    e.stopPropagation(); 

    var acomodacao = $(elemento).data('acom');

    $('#codigo').val(acomodacao.id_quarto);
    $('#titulo_edt').val(acomodacao.titulo);
    $('#descricao_edt').val(acomodacao.descricao);
    $('#imagem_edt').attr('src', acomodacao.url_completa);
    
    $($(elemento).attr('href')).modal('open');      // Abrir modal
    
}

// ALTERAR (PARTE 2)
function editar_acomodacao(){
    var form = $('#cli_edt').get(0);
    var dados = new FormData(form);

    if(!form.checkValidity())
        return false;

    $.post({

        // url_base está vindo do arquivo /js/configuracoes.js
        url: url_base + '/webservice/acomodacao/alterar.php',
        data: dados,
        processData: false,
        contentType: false,

    }).done(function (resposta) {
        var resultado = JSON.parse(resposta);

        if (resultado.erro) {
            alert(resultado.erro);
        }
        else {
            alert('Alterado com sucesso.');
            
            listar_acomodacao();                       // Atualizar a lista
            
            $('#modal1_editar').modal('close');     // Fechar modal
        }

    })
}

// PREVIEW IMAGEM
function mostraPreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.img-preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

//EXCLUIR
function excluir(elemento) {

    // url_base está vindo do arquivo /js/configuracoes.js
    var urlDel = url_base + '/webservice/acomodacao/excluir.php';
    var registroDel = {
        deletar : true,
        id : $(elemento).data('id')
    };

    if(confirm('Tem certeza que deseja excluir ' + $(elemento).data('nome') + '?')){
        $.post({
            url : urlDel,
            data : registroDel
        }).done(function (resposta) {
            if(resposta == 'sucesso'){
                alert('Acomodação excluída com sucesso!'); // Exibe um alert com msg de sucesso
                // window.location.reload(); // Recarrega a página para atualizar

                // Outra forma
                // Remover o objeto deletado da lista (sem recarregar a página)
                // closest vai procurando objetos ancestrais até encontrar um que corresponda ao seletor passado
                $(elemento).closest('tr').remove(); 
            }else{
                alert('Ocorreu um erro: ' + resposta); // Exibe um alert com mensagem de erro
            }
        }).fail(function (erro) {
            alert('Ocorreu um erro: ' + erro); // Exibe um alert com mensagem de erro
        });
    }
}