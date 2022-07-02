//Adiciona a class que faz a animação de 'X' e expande a largura do menu
let btHamburguer = document.getElementById('drop-menu')
btHamburguer.addEventListener('click', () => {

    btHamburguer.classList.toggle('expande-menu')

    let stack01 = document.getElementById('stack01')
    stack01.classList.toggle('stack-01')

    let stack02 = document.getElementById('stack02')
    stack02.classList.toggle('stack-02')

    let stack03 = document.getElementById('stack03')
    stack03.classList.toggle('stack-03')
})

//Exibe e oculta as sections
var sectionFormCadastro = document.getElementById('sec-forms-cadastro')
var sectionFormEdicao = document.getElementById('sec-forms-edicao')
var sectionFormExclusao = document.getElementById('sec-forms-exclusao')
var sectionRead = document.getElementById('sec-read')

function showSectionCadastro() {

    sectionFormCadastro.style.display = 'block'
    sectionFormEdicao.style.display = 'none'
    sectionFormExclusao.style.display = 'none'
    sectionRead.style.display = 'none'
}

function showSectionEdicao() {

    sectionFormCadastro.style.display = 'none'
    sectionFormEdicao.style.display = 'block'
    sectionFormExclusao.style.display = 'none'
    sectionRead.style.display = 'none'
}

function showSectionExclusao() {

    sectionFormCadastro.style.display = 'none'
    sectionFormEdicao.style.display = 'none'
    sectionFormExclusao.style.display = 'block'
    sectionRead.style.display = 'none'
}

function showSectionRead() {

    sectionFormCadastro.style.display = 'none'
    sectionFormEdicao.style.display = 'none'
    sectionFormExclusao.style.display = 'none'
    sectionRead.style.display = 'block'
}

//Altera o icone ao lado do nome do usuário logado para o icone de log out
let iconUserLogado = document.getElementById("usuario-logado");
let iconLogOut = document.getElementById('usuario-log-out');
iconUserLogado.addEventListener('mouseenter', () => {
    iconUserLogado.style.display = 'none';
    iconLogOut.style.display = 'block';
});
iconUserLogado.addEventListener('mouseout', () => {
    iconLogOut.style.display = 'none';
    iconUserLogado.style.display = 'block';
});
