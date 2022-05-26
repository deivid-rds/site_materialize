// ALTERAR (PARTE 1)
function alterar(elemento, e) {
    e.preventDefault();  //impede que o navegador efetue qualquer ação
    e.stopPropagation();

    var sobre = $(elemento).data('sob');

    $('#titulo_novo').val(sobre.titulo);
    $('#descricao_novo').val(sobre.descricao);

}

// ALTERAR (PARTE 2)
function editar_sobre() {
    var form = $('#form_sobre_novo').get(0);
    var dados = new FormData(form);

    if (!form.checkValidity())
        return false;

    $.post({

        // url_base está vindo do arquivo /js/configuracoes.js
        url: url_base + '/webservice/sobre/alterar.php',
        data: dados,
        processData: false,
        contentType: false,

    }).done(function (resposta) {
        var resultado = JSON.parse(resposta);

        if (resultado.erro) {
            alert(resultado.erro);
        }
        else {
            alert('Sobre alterado com sucesso.');
        }

    })
}