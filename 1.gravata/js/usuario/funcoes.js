// LISTAR
function listar_usuario() {
    $.get({
        
        // url_base está vindo do arquivo /js/configuracoes.js
        url: url_base + '/webservice/usuario/listar.php',
        beforeSend: function () {
            // coloco um preload spinner
            var spinner = $('#spinner').html();
            $('#lista_user').append(spinner);
        },
    }).done(function (resposta) {

        $('#lista_user').html('');   // removo o spinner

        // converto o json em um array
        var lista_usuario = JSON.parse(resposta);

        // percorro o array
        lista_usuario.map(function (usuario, indice) {
            var id = 'campo_' + indice;

            // copia o html que esta dentro da div modelo
            // armazena como string
            var tr = $('#modelo').html();

            // substituo placeholders (valores coringa) pelos dados do banco
            tr = tr.replace(/%COD%/g, usuario.id_usuario);
            tr = tr.replace(/%USER%/g, usuario.username);
            tr = tr.replace(/%NOME%/g, usuario.nome);
            tr = tr.replace(/%TIPO%/g, usuario.tipo);

            // convertendo a string em elemento html
            var dom = $(tr).get(0);

            $(dom).data('user', usuario);
            $(dom).find('a[href="#modal1_editar"]').data('user', usuario);

            // adiciona o tr na tela
            $('#lista_user').append(dom);
        });
    });
}

// CADASTRAR
function cadastrar_usuario() {
    var form = $('#form_usuario_novo').get(0);
    var dados = new FormData(form);

    $.post({
        
        // url_base está vindo do arquivo /js/configuracoes.js
        url: url_base + '/webservice/usuario/inserir.php',
        data: dados,
        processData: false,
        contentType: false,

    }).done(function (resposta) {
        var resultado = JSON.parse(resposta);

        if (resultado.erro) {
            alert(resultado.erro);
        }
        else {
            alert('Usuário cadastrado com sucesso.');

            listar_usuario();                       // Atualizar a lista

            $('#modal1_novo').modal('close');       // Fechar modal
        }

    })
}

// ALTERAR (PARTE 1)
function alterar(elemento, e) {
    e.preventDefault();  //impede que o navegador efetue qualquer ação
    e.stopPropagation();

    var usuario = $(elemento).data('user');

    $('#codigo').val(usuario.id_usuario);
    $('#username_editar').val(usuario.username);
    $('#nome_editar').val(usuario.nome);

    $($(elemento).attr('href')).modal('open');      // Abrir modal

}

// ALTERAR (PARTE 2)
function editar_usuario() {
    var form = $('#usu_edt').get(0);
    var dados = new FormData(form);

    if (!form.checkValidity())
        return false;

    $.post({

        // url_base está vindo do arquivo /js/configuracoes.js
        url: url_base + '/webservice/usuario/alterar.php',
        data: dados,
        processData: false,
        contentType: false,

    }).done(function (resposta) {
        var resultado = JSON.parse(resposta);

        if (resultado.erro) {
            alert(resultado.erro);
        }
        else {
            alert('Usuário alterado com sucesso.');

            listar_usuario();                       // Atualizar a lista

            $('#modal1_editar').modal('close');     // Fechar modal
        }

    })
}

// EXCLUIR
function excluir(elemento) {

    // url_base está vindo do arquivo /js/configuracoes.js
    var urlDel = url_base + '/webservice/usuario/excluir.php';
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
                alert('Usuário excluído com sucesso!'); // Exibe um alert com msg de sucesso
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