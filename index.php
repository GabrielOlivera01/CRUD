<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style-login.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header class="l-header">
        <div class="l-header__box__left">
            <i class="fa-solid fa-cube"></i>
            <h1 class="fa-solid main-title">Code Block</h1>
        </div>
        <div class="l-header__box__rigth">
            <ul class="entrar-cadastrar">
                <li>
                    <a id="a-entrar" class="a-entrar" href="#">Entrar</a>
                </li>
                <li>
                    <span class="separator">|</span>
                </li>
                <li>
                    <a id="a-cadastrar" class="a-cadastrar" href="#">Cadastrar</a>
                </li>
            </ul>
        </div>
    </header>
    <main>
        <!-- Section de Login -->
        <section id="login" >
            <div class="login-logo">
                <i id="login-icon" class="fa-solid fa-cube"></i>
            </div>
            <form id="login-form" action="./valida-login.php" method="post">
                <label for="usuario">Usuário
                    <input type="text" name="usuario" id="usuario" required>
                </label>
                <label for="senha">Senha
                    <input type="password" name="senha" id="senha" required>
                </label>
                <div class="controls">
                    <i id="mostrar-senha" class="fa-solid fa-eye-slash"></i>
                    <a id="recuperar-senha" href="#">Esqueci minha senha</a>
                </div>
                <input id="bt-login" type="submit" value="Login">
            </form>
        </section>

        <!-- Section de Cadastro -->
        <section id="cadastro" class="cadastro" style="display:none;">
            <form class="form-cadastro" action="./valida-cadastro.php" method="post">
                <h1 class="form-cadastro__title">Cadastrar nova conta</h1>
                <input type="text" name="user" class="form-cadastro__input border-rad" placeholder="Nome de usuário" required>
                <input type="password" name="pass" class="form-cadastro__input border-rad" placeholder="Senha" required>
                <input type="email" name="mail" class="form-cadastro__input border-rad" placeholder="E-mail" required>
                <input type="submit" value="Cadastrar" id="bt-cadastrar" class="border-rad">
            </form>
        </section>
    </main>
    <footer>

    </footer>
    <script src="./js/login.js"></script>
</body>

</html>