// Caso o usuário não esteja logado
var usuarioLogado = JSON.parse(localStorage.getItem('usuario'));

if(!usuarioLogado)
{
    window.location.href = '../index.php';
}