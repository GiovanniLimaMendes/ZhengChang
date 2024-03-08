document.getElementById('open_btn').addEventListener('click', function (){
    document.getElementById('sidebar').classList.toggle('open-sidebar')
})

function menu(){
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

document.getElementById('computadores').addEventListener('click', function(event) {
    event.preventDefault();
    exibirServicosComputadores();
});

function exibirServicosComputadores() {

    limparServicos();
    
    var htmlServicosComputadores = `
        
        <div class="todosServicos">
            <p selectService>SELECIONE O SERVIÇO DESEJADO:</p>
            <ul>
                <hr class="hrClass">
                <li class="servicos">
                    <a href="#">
                        <img src="../../../img/chevron-right-solid.svg" width="7px">
                        <span class="descricaoServico">
                            Computador não liga
                        </span>
                    </a>
                </li>
                <hr class="hrClass">
                <li class="servicos">
                    <a href="#">
                        <img src="../../../img/chevron-right-solid.svg" width="7px">
                        <span class="servicoDescricao">
                            Sem imagem
                        </span>
                    </a>
                </li>
                <hr class="hrClass">
                <li class="servicos">
                    <a href="#">
                        <img src="../../../img/chevron-right-solid.svg" width="7px">
                        <span class="servicoDescricao">
                            Formatar
                        </span>
                    </a>
                </li>
                <hr class="hrClass">
            </ul>
        </div>
    `;

    document.getElementById('servicosComputadores').innerHTML = htmlServicosComputadores;
}


document.getElementById('internet').addEventListener('click', function(event) {
    event.preventDefault();
    exibirServicosInternet();
});

function exibirServicosInternet() {

    limparServicos();
    
    var htmlServicosInternet = `
        
        <div class="todosServicos">
            <p selectService>SELECIONE O SERVIÇO DESEJADO:</p>
            <ul>
                <hr class="hrClass">
                <li class="servicos">
                    <a href="#">
                        <img src="../../../img/chevron-right-solid.svg" width="7px">
                        <span class="descricaoServico">
                            Sem internet
                        </span>
                    </a>
                </li>
                <hr class="hrClass">
                <li class="servicos">
                    <a href="#">
                        <img src="../../../img/chevron-right-solid.svg" width="7px">
                        <span class="servicoDescricao">
                            Site não abre
                        </span>
                    </a>
                </li>
                <hr class="hrClass">
                <li class="servicos">
                    <a href="#">
                        <img src="../../../img/chevron-right-solid.svg" width="7px">
                        <span class="servicoDescricao">
                            Internet lenta
                        </span>
                    </a>
                </li>
                <hr class="hrClass">
            </ul>
        </div>
    `;

    document.getElementById('servicosInternet').innerHTML = htmlServicosInternet;
}

document.getElementById('impressora').addEventListener('click', function(event) {
    event.preventDefault();
    exibirServicosImpressora();
});

function exibirServicosImpressora() {

    limparServicos();
    
    var htmlServicosImpressora = `
        
        <div class="todosServicos">
            <p id="selectService">SELECIONE O SERVIÇO DESEJADO:</p>
            <ul>
                <hr class="hrClass">
                <li class="servicos">
                    <a href="#">
                        <img src="../../../img/chevron-right-solid.svg" width="7px">
                        <span class="descricaoServico">
                            Instalar impressora
                        </span>
                    </a>
                </li>
                <hr class="hrClass">
                <li class="servicos">
                    <a href="#">
                        <img src="../../../img/chevron-right-solid.svg" width="7px">
                        <span class="servicoDescricao">
                            Não imprime
                        </span>
                    </a>
                </li>
                <hr class="hrClass">
                <li class="servicos">
                    <a href="#">
                        <img src="../../../img/chevron-right-solid.svg" width="7px">
                        <span class="servicoDescricao">
                        Não está digitalizando
                        </span>
                    </a>
                </li>
                <hr class="hrClass">
            </ul>
        </div>
    `;


    document.getElementById('servicosImpressora').innerHTML = htmlServicosImpressora;
}

document.getElementById('telefone').addEventListener('click', function(event) {
    event.preventDefault();
    exibirServicosTelefone();
});

function exibirServicosTelefone() {

    limparServicos();
    
    var htmlServicosTelefone = `
        
        <div class="todosServicos">
            <p id="selectService">SELECIONE O SERVIÇO DESEJADO:</p>
            <ul>
                <hr class="hrClass">
                <li class="servicos">
                    <a href="#">
                        <img src="../../../img/chevron-right-solid.svg" width="7px">
                        <span class="descricaoServico">
                            Não recebo ligações
                        </span>
                    </a>
                </li>
                <hr class="hrClass">
                <li class="servicos">
                    <a href="#">
                        <img src="../../../img/chevron-right-solid.svg" width="7px">
                        <span class="servicoDescricao">
                            Não consigo fazer ligações
                        </span>
                    </a>
                </li>
                <hr class="hrClass">
                <li class="servicos">
                    <a href="#">
                        <img src="../../../img/chevron-right-solid.svg" width="7px">
                        <span class="servicoDescricao">
                        Mudo
                        </span>
                    </a>
                </li>
                <hr class="hrClass">
                <li class="servicos">
                    <a href="#">
                        <img src="../../../img/chevron-right-solid.svg" width="7px">
                        <span class="servicoDescricao">
                        Sem serviço
                        </span>
                    </a>
                </li>
                <hr class="hrClass">
            </ul>
        </div>
    `;

    document.getElementById('servicosTelefone').innerHTML = htmlServicosTelefone;
}
document.getElementById('email').addEventListener('click', function(event) {
    event.preventDefault();
    exibirServicosEmail();
});

function exibirServicosEmail() {

    limparServicos();
    
    var htmlServicosEmail = `
        
        <div class="todosServicos">
            <p id="selectService">SELECIONE O SERVIÇO DESEJADO:</p>
            <ul>
                <hr class="hrClass">
                <li class="servicos">
                    <a href="#">
                        <img src="../../../img/chevron-right-solid.svg" width="7px">
                        <span class="descricaoServico">
                            Não recebo e-mail
                        </span>
                    </a>
                </li>
                <hr class="hrClass">
                <li class="servicos">
                    <a href="#" id="enviarEmail">
                        <img src="../../../img/chevron-right-solid.svg" width="7px">
                        <span class="servicoDescricao">
                            Não consigo enviar e-mail
                        </span>
                    </a>
                </li>
                <hr class="hrClass">
                <li class="servicos">
                    <a href="#">
                        <img src="../../../img/chevron-right-solid.svg" width="7px">
                        <span class="servicoDescricao">
                        E-mail caindo no lixo eletrônico
                        </span>
                    </a>
                </li>
                <hr class="hrClass">
                <li class="servicos">
                    <a href="#" id="configEmail">
                        <img src="../../../img/chevron-right-solid.svg" width="7px">
                        <span class="servicoDescricao">
                        Configurar e-mail
                        </span>
                    </a>
                </li>
                <hr class="hrClass">
            </ul>
        </div>
    `;
    
    
    document.getElementById('servicosEmail').innerHTML = htmlServicosEmail;
}

function limparServicos() {

    document.getElementById('servicosComputadores').innerHTML = '';

    document.getElementById('servicosInternet').innerHTML = '';

    document.getElementById('servicosImpressora').innerHTML = '';

    document.getElementById('servicosTelefone').innerHTML = '';

    document.getElementById('servicosEmail').innerHTML = '';
}