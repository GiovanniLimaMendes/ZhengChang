document.getElementById('open_btn').addEventListener('click', function (){
    document.getElementById('sidebar').classList.toggle('open-sidebar')
})

function menu(){
    window.location.assign('http://192.168.1.15/zhengchang/data/login/main/menu.php');
}

function fazerReserva(){
    window.location.assign('http://192.168.1.15/zhengchang/data/login/main/index.php');
}

function reservas(){
    window.location.assign('http://192.168.1.15/zhengchang/data/login/main/reservas/index.php');
}

function chamado(){
    window.location.assign('http://192.168.1.15/zhengchang/data/login/main/chamados/index.php');
}

function meusChamados(){
    window.location.assign('http://192.168.1.15/zhengchang/data/login/main/chamados/todoschamados/meuschamados.php');
}

function servicosComputadores(){

    ocultarServico();
    var servicosComputadores = document.getElementById("servicosComputadores");
    servicosComputadores.style.display = "block";
    console.log();
}

function servicosInternet(){

    ocultarServico();
    var servicosInternet = document.getElementById("servicosInternet");
    servicosInternet.style.display = "block";
}

function servicosImpressora(){

    ocultarServico();
    var servicosImpressora = document.getElementById("servicosImpressora");
    servicosImpressora.style.display = "block";
}

function servicosTelefone(){

    ocultarServico();
    var servicosTelefone = document.getElementById("servicosTelefone");
    servicosTelefone.style.display = "block";
}

function servicosEmail(){

    ocultarServico();
    var servicosEmail = document.getElementById("servicosEmail");
    servicosEmail.style.display = "block";
}

function ocultarServico(){
    var servicosComputadores = document.getElementById("servicosComputadores");
    servicosComputadores.style.display = "none";

    var servicosInternet = document.getElementById("servicosInternet");
    servicosInternet.style.display = "none";

    var servicosImpressora = document.getElementById("servicosImpressora");
    servicosImpressora.style.display = "none";

    var servicosTelefone = document.getElementById("servicosTelefone");
    servicosTelefone.style.display = "none";

    var servicosEmail = document.getElementById("servicosEmail");
    servicosEmail.style.display = "none";
}

function exibirFormulario() {

    // Obtém o formulário a ser exibido
    var formulario = document.getElementById('exibirFormulario');

    // Exibe o formulário
    formulario.style.display = 'block';
}

// Seleciona todos os elementos com a classe 'optionChamado'
var optionChamado = document.getElementsByClassName("optionChamado");

// Adiciona um event listener a cada elemento com a classe 'optionChamado'
for (var i = 0; i < optionChamado.length; i++) {
    optionChamado[i].addEventListener("click", function(event) {
        event.preventDefault();

        // Obtém o conteúdo do elemento clicado
        var conteudoSpan = this.innerText;

        // Atribui o conteúdo ao campo oculto
        document.getElementById("dadosParaPHP").value = conteudoSpan;
    });
}