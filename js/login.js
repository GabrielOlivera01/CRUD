let txtSenha = document.getElementById('senha');
let mostrarSenha = document.getElementById('mostrar-senha');

mostrarSenha.addEventListener('click', () => {

    if (mostrarSenha.className == "fa-solid fa-eye-slash") {
        mostrarSenha.classList.add('fa-eye');
        mostrarSenha.classList.remove('fa-eye-slash');
        txtSenha.type = 'text';
    } else {
        mostrarSenha.classList.remove('fa-eye');
        mostrarSenha.classList.add('fa-eye-slash');
        txtSenha.type = 'password';
    }

});


let entrar = document.getElementById('a-entrar');
let cadastrar = document.getElementById('a-cadastrar');

let sectionEntrar = document.getElementById('login');
let sectionCadastrar = document.getElementById('cadastro');

entrar.addEventListener('click', () => {
    sectionCadastrar.style.display = 'none';
    sectionEntrar.style.display = 'block';
});
cadastrar.addEventListener('click', () => {
    sectionEntrar.style.display = 'none';
    sectionCadastrar.style.display = 'block';
});
