document.getElementById('open_btn').addEventListener('click', function (){
    document.getElementById('sidebar').classList.toggle('open-sidebar');
})

function menu(){
    window.location.assign('http://192.168.1.133/reservaSalaReuniao.TESTE/data/login/main/index.php');
}

function reservas(){
    window.location.assign('http://192.168.1.133/reservaSalaReuniao.TESTE/data/login/main/reservas/index.php');
}

function chamado(){
    window.location.assign('http://192.168.1.133/reservaSalaReuniao.TESTE/data/login/main/chamados/index.php');
}