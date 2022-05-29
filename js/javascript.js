
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

function showSectionCadastro() {
    let sectionFormCadastro = document.getElementById('sec-forms-cadastro')
    let sectionFormEdicao = document.getElementById('sec-forms-edicao')
    let sectionFormExclusao = document.getElementById('sec-forms-exclusao')

    sectionFormCadastro.style.display = 'block'
    sectionFormEdicao.style.display = 'none'
    sectionFormExclusao.style.display = 'none'
}

function showSectionEdicao() {
    let sectionFormCadastro = document.getElementById('sec-forms-cadastro')
    let sectionFormEdicao = document.getElementById('sec-forms-edicao')
    let sectionFormExclusao = document.getElementById('sec-forms-exclusao')

    sectionFormCadastro.style.display = 'none'
    sectionFormEdicao.style.display = 'block'
    sectionFormExclusao.style.display = 'none'
}

function showSectionExclusao() {
    let sectionFormCadastro = document.getElementById('sec-forms-cadastro')
    let sectionFormEdicao = document.getElementById('sec-forms-edicao')
    let sectionFormExclusao = document.getElementById('sec-forms-exclusao')

    sectionFormCadastro.style.display = 'none'
    sectionFormEdicao.style.display = 'none'
    sectionFormExclusao.style.display = 'block'
}
