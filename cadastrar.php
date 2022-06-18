<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style-login.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* #user-icone {
            height: 70px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .circle-h, .circle-b {
            background-color: white;
            margin: 2px;
        }

        .circle-h {
            height: 24px;
            width: 24px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .circle-h-n {
            background-color: #0466C8;
            height: 20px;
            width: 20px;
            border-radius: 50%;
        }

        .circle-b {
            height: 26px;
            width: 36px;
            border-top-left-radius: 50%;
            border-top-right-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: flex-end;
        }

        .circle-b-n {
            background-color: #0466C8;
            border-top-left-radius: 50%;
            border-top-right-radius: 50%;
            height: 24px;
            width: 32px;
        } */

    </style>
</head>

<body>
    <header class="l-header">
        <div class="l-header__box__left">
            <i class="fa-solid fa-cube"></i>
            <h1 class="fa-solid main-title">Code Block</h1>
        </div>
        <!-- <div class="l-header__box__rigth">
            <div id="user-icone">
                <div class="circle-h">
                    <div class="circle-h-n">
                    </div>
                </div>
                <div class="circle-b">
                    <div class="circle-b-n">
                    </div>
                </div>
            </div> -->
            <!-- <a href="index.php">Entrar</a><span>|</span>Cadastrar<a href="cadastrar.php"></a> -->
        </div>
    </header>
    <main>
        <section id="login">
            <div class="login-logo">
                <i id="login-icon" class="fa-solid fa-cube"></i>
            </div>
            <form id="login-form" action="valida-login.php" method="post">
                <label for="usuario">Usuário
                    <input type="text" name="usuario" id="usuario" required>
                </label>
                <label for="senha">Senha
                    <input type="password" name="senha" id="senha" required>
                </label>
                <div class="controls">
                    <input type="checkbox" name="mostrar-senha" id="mostrar-senha">
                    <i id="fa-eye-slash" class="fa-solid fa-eye-slash"></i>
                </div>
                <input id="bt-login" type="submit" value="Login">
            </form>
        </section>
    </main>
    <footer>

    </footer>
    <script src="js/login.js"></script>
</body>

</html>