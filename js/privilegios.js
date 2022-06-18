let privilegioUsuario = document.getElementById('privilegio').innerText;

// alert(privilegioUsuario);
//0 = Usuário normal
//1 = root

if (privilegioUsuario == 0) {
    let sectionCadastro = document.getElementsByClassName('nav__main__item')[0];
    let sectionEdicao = document.getElementsByClassName('nav__main__item')[1];
    let sectionExclusao = document.getElementsByClassName('nav__main__item')[2];
    let sectionRead = document.getElementsByClassName('nav__main__item')[3];

    sectionCadastro.style.display = 'none';
    sectionRead.style.display = 'none';
}