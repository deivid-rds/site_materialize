// LISTAR
function listar_cliente() {
    $.get({

        // url_base está vindo do arquivo /js/configuracoes.js
        url: url_base + '/webservice/cliente/listar.php',
        beforeSend: function () {
            // coloco um preload spinner
            var spinner = $('#spinner').html();
            $('#lista_cli').append(spinner);
        },
    }).done(function (resposta) {

        $('#lista_cli').html('');   // removo o spinner

        // converto o json em um array
        var lista_cliente = JSON.parse(resposta);

        // percorro o array
        lista_cliente.map(function (cliente, indice) {
            var id = 'campo_' + indice;

            // copia o html que esta dentro da div modelo
            // armazena como string
            var tr = $('#modelo').html();

            // substituo placeholders (valores coringa) pelos dados do banco
            tr = tr.replace('%COD%', cliente.id_cliente);
            tr = tr.replace('%COD%', cliente.id_cliente);
            tr = tr.replace('%CLI%', cliente.nome);
            tr = tr.replace('%CLI%', cliente.nome);
            tr = tr.replace('%TEL%', cliente.telefone);

            // convertendo a string em elemento html
            var dom = $(tr).get(0);

            $(dom).data('cli', cliente);
            $(dom).find('a[href="#modal1_editar"]').data('cli', cliente);

            // adiciona o tr na tela
            $('#lista_cli').append(dom);
        });
    });
}

// CADASTRAR
function cadastrar_cliente() {
    var form = $('#form_cliente_novo').get(0);
    var dados = new FormData(form);

    $.post({

        // url_base está vindo do arquivo /js/configuracoes.js
        url: url_base + '/webservice/cliente/inserir.php',
        data: dados,
        processData: false,
        contentType: false,

    }).done(function (resposta) {
        var resultado = JSON.parse(resposta);

        if (resultado.erro) {
            alert(resultado.erro);
        }
        else {
            alert('Cliente cadastrado com sucesso.');

            listar_cliente();                       // Atualizar a lista

            $('#modal1_novo').modal('close');       // Fechar modal
        }

    })
}

// ALTERAR (PARTE 1)
function alterar(elemento, e) {
    e.preventDefault();  //impede que o navegador efetue qualquer ação
    e.stopPropagation(); 

    var cliente = $(elemento).data('cli');

    $('#codigo').val(cliente.id_cliente);
    $('#nome_edt').val(cliente.nome);
    $('#telefone_edt').val(cliente.telefone);
    $('#email_edt').val(cliente.email);
    $('#senha_edt').val(cliente.senha);
    $('#rua_edt').val(cliente.rua);
    $('#numero_casa_edt').val(cliente.numero_casa);
    $('#cidade_edt').val(cliente.cidade);
    $('#estado_edt').val(cliente.estado);
    $('#observacao_edt').val(cliente.observacao);
    
    $($(elemento).attr('href')).modal('open');      // Abrir modal
    
}

// ALTERAR (PARTE 2)
function editar_cliente(){
    var form = $('#cli_edt').get(0);
    var dados = new FormData(form);

    if(!form.checkValidity())
        return false;

    $.post({

        // url_base está vindo do arquivo /js/configuracoes.js
        url: url_base + '/webservice/cliente/alterar.php',
        data: dados,
        processData: false,
        contentType: false,

    }).done(function (resposta) {
        var resultado = JSON.parse(resposta);

        if (resultado.erro) {
            alert(resultado.erro);
        }
        else {
            alert('Cliente alterado com sucesso.');
            
            listar_cliente();                       // Atualizar a lista
            
            $('#modal1_editar').modal('close');     // Fechar modal
        }

    })
}

//EXCLUIR
function excluir(elemento) {

    // url_base está vindo do arquivo /js/configuracoes.js
    var urlDel = url_base + '/webservice/cliente/excluir.php';
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
                alert('Usuário excluído com sucesso!'); // Exibe um alert com msg de sucesso
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