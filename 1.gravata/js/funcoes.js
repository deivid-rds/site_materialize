// SAIR DO APLICATIVO
function sair() {
    if (confirm('Tem certeza que deseja sair?')) {
        localStorage.clear();
        window.location.href = '../index.php';
    }
}