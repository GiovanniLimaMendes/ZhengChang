// Função de abrir o menu lateral da página

document.getElementById('open_btn').addEventListener('click', function (){
    document.getElementById('sidebar').classList.toggle('open-sidebar')
})

// Funcionamento dos botões laterais da página

function menu(){
    window.location.assign('http://192.168.1.15/zhengchang/data/login/main/index.php');
}

function reservas(){
    window.location.assign('http://192.168.1.15/zhengchang/data/login/main/reservas/index.php');
}

function chamado(){
    window.location.assign('http://192.168.1.15/zhengchang/data/login/main/chamados/index.php');
}