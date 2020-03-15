// LISTAR
function listar_principal_slider() {
    $.get({

        // url_base está vindo do arquivo /js/configuracoes.js
        url: url_base + '/webservice/principal_slider/listar.php',
        beforeSend: function () {
            // coloco um preload spinner
            var spinner = $('#spinner').html();
            $('#img_principal_slider').append(spinner);
        },
    }).done(function (resposta) {

        $('#img_principal_slider').html('');   // removo o spinner

        // converto o json em um array
        var lista_principal_slider = JSON.parse(resposta);

        // percorro o array
        lista_principal_slider.map(function (principal, indice) {
            var id = 'campo_' + indice;

            // copia o html que esta dentro da div modelo
            // armazena como string
            var tr = $('#modelo_principal_slider').html();

            // substituo placeholders (valores coringa) pelos dados do banco
            tr = tr.replace(/%ID_SLIDER%/g, principal.id_principal_slider);
            tr = tr.replace(/%TITULO_SLIDER%/g, principal.titulo_slider);
            tr = tr.replace(/%DESCRICAO_SLIDER%/g, principal.descricao_slider);
            
            // se não tiver uma imagem no banco de dados, será adicionada uma padrão
            var img_url = principal.imagem_slider;
            if(img_url == '')
            {
                img_url = url_base + '/imagem/logo_original.png';
            }

            tr = tr.replace('%IMG_SLIDER%', url_base + '/imagem/' + img_url);

            // convertendo a string em elemento html
            var dom = $(tr).get(0);

            $(dom).data('pri_sli', principal);
            $(dom).find('a[href="#modal_slider_editar"]').data('pri_sli', principal);

            // adiciona o tr na tela
            $('#img_principal_slider').append(dom);
        });

        // Incializa o slider
        $('.slider').slider();

    });
}

// CADASTRAR
function cadastrar_slider() {
    var form = $('#form_slider_novo').get(0);
    var dados = new FormData(form);

    $.post({

        // url_base está vindo do arquivo /js/configuracoes.js
        url: url_base + '/webservice/principal_slider/inserir.php',
        data: dados,
        processData: false,
        contentType: false,

    }).done(function (resposta) {
        var resultado = JSON.parse(resposta);

        if (resultado.erro) {
            alert(resultado.erro);
        }
        else {
            alert('Principal slider cadastrado com sucesso.');
            
            listar_principal_slider();          // Atualizar a lista

            $('#modal1_novo').modal('close');   // Fechar modal
        }

    })
}

// ALTERAR (PARTE 1)
function alterar(elemento, e) {
    e.preventDefault();  //impede que o navegador efetue qualquer ação
    e.stopPropagation(); 

    var slider = $(elemento).data('pri_sli');

    $('#codigo_slider').val(slider.id_principal_slider);
    $('#titulo_editar_slider').val(slider.titulo_slider);
    $('#descricao_editar_slider').val(slider.descricao_slider);
    $('#imagem_editar_slider').attr('src', slider.imagem_slider);
    
    $($(elemento).attr('href')).modal('open');      // Abrir modal
    
}

// ALTERAR (PARTE 2)
function editar_slider(){
    var form = $('#pri_sli_edt').get(0);
    var dados = new FormData(form);

    if(!form.checkValidity())
        return false;

    $.post({

        // url_base está vindo do arquivo /js/configuracoes.js
        url: url_base + '/webservice/principal_slider/alterar.php',
        data: dados,
        processData: false,
        contentType: false,

    }).done(function (resposta) {
        var resultado = JSON.parse(resposta);

        if (resultado.erro) {
            alert(resultado.erro);
        }
        else {
            alert('Slider alterado com sucesso.');
            
            listar_principal_slider();                    // Atualizar a lista
            
            $('#modal_slider_editar').modal('close');     // Fechar modal
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
    var urlDel = url_base + '/webservice/principal_slider/excluir.php';
    var usuarioDel = {
        deletar : true,
        id : $(elemento).data('id')
    };

    if(confirm('Tem certeza que deseja excluir ' + $(elemento).data('nome') + '?')){
        $.post({
            url : urlDel,
            data : usuarioDel
        }).done(function (resposta) {
            if(resposta == 'sucesso'){
                alert('Slider excluído com sucesso!'); // Exibe um alert com msg de sucesso
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