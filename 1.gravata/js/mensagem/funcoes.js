// LISTAR MENSAGEM
function listar_mensagem() {
    $.get({

        // url_base está vindo do arquivo /js/configuracoes.js
        url: url_base + '/webservice/mensagem/listar.php',
        beforeSend: function () {
            // coloco um preload spinner
            var spinner = $('#spinner').html();
            $('#lista_msg').append(spinner);
        },
    }).done(function (resposta) {

        $('#lista_msg').html('');   // removo o spinner

        // converto o json em um array
        var lista_mensagem = JSON.parse(resposta);

        // percorro o array
        lista_mensagem.map(function (mensagem, indice) {
            var id = 'campo_' + indice;

            // copia o html que esta dentro da div modelo
            // armazena como string
            var tr = $('#modelo').html();

            // substituo placeholders (valores coringa) pelos dados do banco
            tr = tr.replace('%COD%', mensagem.id_mensagem);
            tr = tr.replace('%NOME%', mensagem.nome);
            tr = tr.replace('%TEL%', mensagem.telefone);
            tr = tr.replace('%MSG%', mensagem.mensagem);

            // convertendo a string em elemento html
            var dom = $(tr).get(0);

            // adiciona o tr na tela
            $('#lista_msg').append(dom);
        });
    });
}

// CADASTRAR MENSAGEM
function cadastrar_mensagem() {
    var form = $('#form_contato').get(0);
    var dados = new FormData(form);

    $.post({

        // url_base está vindo do arquivo /js/configuracoes.js
        url: url_base + '/webservice/mensagem/inserir.php',
        data: dados,
        processData: false,
        contentType: false,

    }).done(function (resposta) {
        var resultado = JSON.parse(resposta);

        if (resultado.erro) {
            alert(resultado.erro);
        }
        else {
            alert('Mensagem enviada com sucesso.');
        }

    })
}