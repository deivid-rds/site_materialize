// LISTAR
function listar_principal() {
    $.get({

        // url_base está vindo do arquivo /js/configuracoes.js
        url: url_base + '/webservice/principal/listar.php',
        beforeSend: function () {
            // coloco um preload spinner
            var spinner = $('#spinner').html();
            $('#card_principal').append(spinner);
        },
    }).done(function (resposta) {

        $('#card_principal').html('');   // removo o spinner

        // converto o json em um array
        var lista_principal = JSON.parse(resposta);

        // percorro o array
        lista_principal.map(function (principal, indice) {
            var id = 'campo_' + indice;

            // copia o html que esta dentro da div modelo
            // armazena como string
            var tr = $('#modelo_principal').html();

            // substituo placeholders (valores coringa) pelos dados do banco
            tr = tr.replace(/%ID%/g, principal.id_principal);
            tr = tr.replace(/%TITULO%/g, principal.titulo);
            tr = tr.replace(/%DESCRICAO%/g, principal.descricao);
            
            // se não tiver uma imagem no banco de dados, será adicionada uma padrão
            var img_url = principal.imagem;
            if(img_url == '')
            {
                img_url = url_base + '/imagem/logo_original.png';
            }

            tr = tr.replace('%IMG%', url_base + '/imagem/' + img_url);

            // convertendo a string em elemento html
            var dom = $(tr).get(0);

            $(dom).data('princ', principal);
            $(dom).find('a[href="#modal2_editar"]').data('princ', principal);

            // adiciona o tr na tela
            $('#card_principal').append(dom);
        });
    });
}

// CADASTRAR
function cadastrar_principal() {
    var form = $('#form_principal_novo').get(0);
    var dados = new FormData(form);

    $.post({

        // url_base está vindo do arquivo /js/configuracoes.js
        url: url_base + '/webservice/principal/inserir.php',
        data: dados,
        processData: false,
        contentType: false,

    }).done(function (resposta) {
        var resultado = JSON.parse(resposta);

        if (resultado.erro) {
            alert(resultado.erro);
        }
        else {
            alert('Principal cadastrado com sucesso.');
            
            listar_principal();                     // Atualizar a lista

            $('#modal2_novo').modal('close');       // Fechar modal
        }

    })
}

// ALTERAR (PARTE 1)
function alterar_principal(elemento, e) {
    e.preventDefault();  //impede que o navegador efetue qualquer ação
    e.stopPropagation(); 

    var principal = $(elemento).data('princ');

    $('#codigo').val(principal.id_principal);
    $('#titulo_editar').val(principal.titulo);
    $('#descricao_editar').val(principal.descricao);
    $('#imagem_editar').attr('src', principal.url_completa);
    
    $($(elemento).attr('href')).modal('open');      // Abrir modal
    
}

// ALTERAR (PARTE 2)
function editar_principal(){
    var form = $('#pri_edt').get(0);
    var dados = new FormData(form);

    if(!form.checkValidity())
        return false;

    $.post({

        // url_base está vindo do arquivo /js/configuracoes.js
        url: url_base + '/webservice/principal/alterar.php',
        data: dados,
        processData: false,
        contentType: false,

    }).done(function (resposta) {
        var resultado = JSON.parse(resposta);

        if (resultado.erro) {
            alert(resultado.erro);
        }
        else {
            alert('Principal alterado com sucesso.');
            
            listar_principal();                       // Atualizar a lista
            
            $('#modal2_editar').modal('close');       // Fechar modal
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
function excluir_principal(elemento) {

    // url_base está vindo do arquivo /js/configuracoes.js
    var urlDel = url_base + '/webservice/principal/excluir.php';
    var principalDel = {
        deletar : true,
        id : $(elemento).data('id')
    };

    if(confirm('Tem certeza que deseja excluir ' + $(elemento).data('nome') + '?')){
        $.post({
            url : urlDel,
            data : principalDel
        }).done(function (resposta) {
            if(resposta == 'sucesso'){
                alert('Excluído com sucesso!'); // Exibe um alert com msg de sucesso
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