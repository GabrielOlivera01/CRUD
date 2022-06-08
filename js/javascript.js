let btHamburguer = document.getElementById('drop-menu')
btHamburguer.addEventListener('click', () => {

    btHamburguer.classList.toggle('drop-menu')

    let stack01 = document.getElementById('stack01')
    stack01.classList.toggle('stack-01')

    let stack02 = document.getElementById('stack02')
    stack02.classList.toggle('stack-02')

    let stack03 = document.getElementById('stack03')
    stack03.classList.toggle('stack-03')
})

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
