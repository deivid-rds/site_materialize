// LISTAR
function listar_localizacao() {
    $.get({

        // url_base está vindo do arquivo /js/configuracoes.js
        url: url_base + '/webservice/localizacao/listar.php',
        beforeSend: function () {
            // coloco um preload spinner
            var spinner = $('#spinner').html();
            $('#lista_loc').append(spinner);
        },
    }).done(function (resposta) {

        $('#lista_loc').html('');   // removo o spinner

        // converto o json em um array
        var lista_localizacao = JSON.parse(resposta);

        // percorro o array
        lista_localizacao.map(function (localizacao, indice) {
            var id = 'campo_' + indice;

            // copia o html que esta dentro da div modelo
            // armazena como string
            var tr = $('#modelo').html();

            // substituo placeholders (valores coringa) pelos dados do banco
            tr = tr.replace(/%COD%/g, localizacao.id_localizacao);
            tr = tr.replace(/%LOC%/g, localizacao.local);
            tr = tr.replace(/%APR%/g, localizacao.aproximadamente);
            tr = tr.replace(/%KM%/g , localizacao.km);

            // convertendo a string em elemento html
            var dom = $(tr).get(0);

            $(dom).data('loc', localizacao);
            $(dom).find('a[href="#modal1_editar"]').data('loc', localizacao);

            // adiciona o tr na tela
            $('#lista_loc').append(dom);
        });
    });
}

// CADASTRAR
function cadastrar_localizacao() {
    var form = $('#form_localizacao_novo').get(0);
    var dados = new FormData(form);

    $.post({

        // url_base está vindo do arquivo /js/configuracoes.js
        url: url_base + '/webservice/localizacao/inserir.php',
        data: dados,
        processData: false,
        contentType: false,

    }).done(function (resposta) {
        var resultado = JSON.parse(resposta);

        if (resultado.erro) {
            alert(resultado.erro);
        }
        else {
            alert('Localização cadastrada com sucesso.');

            listar_localizacao();                       // Atualizar a lista

            $('#modal1_novo').modal('close');           // Fechar modal
        }

    })
}

// ALTERAR (PARTE 1)
function alterar(elemento, e) {
    e.preventDefault();  //impede que o navegador efetue qualquer ação
    e.stopPropagation();

    var localizacao = $(elemento).data('loc');

    $('#codigo').val(localizacao.id_localizacao);
    $('#local_editar').val(localizacao.local);
    $('#aprox_editar').val(localizacao.aproximadamente);
    $('#km_editar').val(localizacao.km);

    $($(elemento).attr('href')).modal('open');      // Abrir modal

}

// ALTERAR (PARTE 2)
function editar_localizacao() {
    var form = $('#loc_edt').get(0);
    var dados = new FormData(form);

    if (!form.checkValidity())
        return false;

    $.post({

        // url_base está vindo do arquivo /js/configuracoes.js
        url: url_base + '/webservice/localizacao/alterar.php',
        data: dados,
        processData: false,
        contentType: false,

    }).done(function (resposta) {
        var resultado = JSON.parse(resposta);

        if (resultado.erro) {
            alert(resultado.erro);
        }
        else {
            alert('Localização alterada com sucesso.');

            listar_localizacao();                       // Atualizar a lista

            $('#modal1_editar').modal('close');         // Fechar modal
        }

    })
}

// EXCLUIR
function excluir(elemento) {

    // url_base está vindo do arquivo /js/configuracoes.js
    var urlDel = url_base + '/webservice/localizacao/excluir.php';
    var registroDel = {
        deletar: true,
        id: $(elemento).data('id')
    };

    if (confirm('Tem certeza que deseja excluir ' + $(elemento).data('nome') + '?')) {
        $.post({
            url: urlDel,
            data: registroDel
        }).done(function (resposta) {
            if (resposta == 'sucesso') {
                alert('Localização excluída com sucesso!'); // Exibe um alert com msg de sucesso
                // window.location.reload(); // Recarrega a página para atualizar

                // Outra forma
                // Remover o objeto deletado da lista (sem recarregar a página)
                // closest vai procurando objetos ancestrais até encontrar um que corresponda ao seletor passado
                $(elemento).closest('tr').remove();
            } else {
                alert('Ocorreu um erro: ' + resposta); // Exibe um alert com mensagem de erro
            }
        }).fail(function (erro) {
            alert('Ocorreu um erro: ' + erro); // Exibe um alert com mensagem de erro
        });
    }
}