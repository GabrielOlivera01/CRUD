<?php
    session_start();
    require_once "./config.php";

    $obj = new Sql();
    $listaReg = $obj->listaUsuariosCadastrados();

    $usuario = $_SESSION['usuarioLogado'];

    $privilegio = $obj->verificaPrivilegio($usuario);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Criação do meu primeiro sistema CRUD">
    <title>Document</title>
    <!-- CSS Principal -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Biblioteca de Icones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Solid Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/solid.min.css"
        integrity="sha512-qzgHTQ60z8RJitD5a28/c47in6WlHGuyRvMusdnuWWBB6fZ0DWG/KyfchGSBlLVeqAz+1LzNq+gGZkCSHnSd3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- BootStrap -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
</head>
<span id="privilegio" style="display:none;"><?php echo $privilegio; ?></span>
<body>
    <header class="l-header">
        <!-- <h1 class="header__title">
            <i class="fa-solid fa-cube header__icon"> Controle de Usuarios</i>
        </h1> -->
        <div class="l-header__box__left">
            <h1 class="fa-solid main-title">Controle de Usuarios</h1>
        </div>
        <div class="l-header__box__rigth">
            <a class="not-text-decoration" href="index.php"><i id="usuario-log-out" class="fa-solid fa-arrow-right-from-bracket"></i></a>
            <i id="usuario-login" class="fa-solid fa-user"></i>
            <label id="usuario-logado" for="usuario-login"><?php echo $_SESSION['usuarioLogado']; ?></label>
        </div>
    </header>

    <menu class="menu">
        <section id="drop-menu" class="menu__bt__area">
            <div id="area-bt-hamburguer" class="menu__bt">
                <div id="stack01" class="stack menu__bt__stack"></div>
                <div id="stack02" class="stack menu__bt__stack"></div>
                <div id="stack03" class="stack menu__bt__stack"></div>
            </div>
        </section>
        <nav class="nav">
            <ul id="items-menu" class="nav__main">
                <li class="nav__main__item" >
                    <abbr class="nav__main__desc" title="Cadastrar novo Usuário">
                        <i class="nav__main__icon fa-solid fa-user" onclick="showSectionCadastro()"></i>
                    </abbr>
                </li>
                <li class="nav__main__item">
                    <abbr class="nav__main__desc" title="Editar Usuário">
                        <i class="nav__main__icon fa-solid fa-pencil" onclick="showSectionEdicao()"></i>
                    </abbr>
                </li>
                <li class="nav__main__item">
                    <abbr class="nav__main__desc" title="Deletar Usuário">
                        <i class="nav__main__icon fa-solid fa-file-circle-xmark" onclick="showSectionExclusao()"></i>
                    </abbr>
                </li>
                <li class="nav__main__item">
                    <abbr class="nav__main__desc" title="Listar Usuários">
                        <i class="nav__main__icon fa-solid fa-folder-open" onclick="showSectionRead()"></i>
                    </abbr>
                </li>
                <li class="nav__main__item">
                    <abbr class="nav__main__desc" title="Configurações">
                        <i class="nav__main__icon fa-solid fa-gear"></i>
                    </abbr>
                </li>
            </ul>
        </nav>
    </menu>

    <main class="main">
        <!-- Section de Cadastro -->
        <section id="sec-forms-cadastro" class="sec-forms main__sections">
            <h1 class="title-forms">Cadastro de Usuário</h1>
            <form class="form-usuario" id="cadastro-usuario" action="cadastro.php" method="post">
                <label for="caduser">Nome de Usuário</label>
                <input id="caduser" name="caduser" type="text" required>
                <label for="cadpass">Senha</label>
                <input id="cadpass" name="cadpass" type="password" required>
                <label for="cademail">E-mail</label>
                <input id="cademail" name="cademail" type="email" required>
                <input id="bt-cadastrar" type="submit" value="Cadastrar">
            </form>
        </section>

        <!-- Section de Edição -->
        <section id="sec-forms-edicao" class="sec-forms main__sections">
            <h1 class="title-forms">Edição de Usuário</h1>
            <form class="form-usuario" id="edicao-usuario" action="edicao.php" method="post">
                <label for="edituser">Usuário para Edição</label>
                <input id="edituser" name="edituser" type="text" required>
                <label for="editname">Nome</label>
                <input id="editname" name="editname" type="text">
                <label for="editsenha">Senha</label>
                <input id="editsenha" name="editsenha" type="password">
                <label for="editemail">E-mail</label>
                <input id="editemail" name="editemail" type="email">
                <input id="bt-editar" type="submit" value="Editar">
            </form>
        </section>

        <!-- Section de Exclusão -->
        <section id="sec-forms-exclusao" class="sec-forms main__sections">
            <h1 class="title-forms">Exclusao de Usuário</h1>
            <form class="form-usuario" id="exclusao-usuario" action="exclusao.php" method="post">
                <label for="deluser">Nome de Usuário</label>
                <input id="deluser" name="deluser" type="text" required>
                <label for="delpass">Senha</label>
                <input id="delpass" name="delpass" type="password" required>
                <input id="bt-excluir" type="submit" value="Excluir">
            </form>
        </section>

        <!-- Section de read -->
        <section id="sec-read" class="main__sections">

            <div class="col-offset-1 col-md-10">
                <div class="table-responsive">
                    <table id="usuarios-cadastrados" class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Senha</th>
                                <th scope="col">E-mail</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($listaReg as $key => $value) {
                
                                echo "<tr>";
                                echo '<th scope="row">'.$key.'</th>';
                                echo '<td>';
                                print_r($listaReg[$key]['usernameusuario']);
                                echo '</td>';
                                echo '<td>';
                                print_r($listaReg[$key]['passwordussuario']);
                                echo '</td>';
                                echo '<td>';
                                print_r($listaReg[$key]['emailusuario']);
                                echo '</td>';
                                echo "</tr>";
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <!-- <span>Redes Sociais</span> -->
        <ul id="rede-sociais" class="footer__redes__sociais">
            <li class="footer__redes__sociais__item">
                <abbr class="footer__redes__sociais__desc" title="WhatsApp">
                    <i class="footer__redes_sociais__icon fa-brands fa-whatsapp"></i>
                </abbr>
            </li>
            <li class="footer__redes__sociais__item">
                <abbr class="footer__redes__sociais__desc" title="Discord">
                    <i class="footer__redes_sociais__icon fa-brands fa-discord"></i>
                </abbr>
            </li>
            <li class="footer__redes__sociais__item">
                <abbr class="footer__redes__sociais__desc" title="Telegram">
                    <i class="footer__redes_sociais__icon fa-brands fa-telegram"></i>
                </abbr>
            </li>
            <li class="footer__redes__sociais__item">
                <abbr class="footer__redes__sociais__desc" title="Instagram">
                    <i class="footer__redes_sociais__icon fa-brands fa-instagram"></i>
                </abbr>
            </li>
            <li class="footer__redes__sociais__item">
                <abbr class="footer__redes__sociais__desc" title="Linked In">
                    <i class="footer__redes_sociais__icon fa-brands fa-linkedin-in"></i>
                </abbr>
            </li>
            <li class="footer__redes__sociais__item">
                <abbr class="footer__redes__sociais__desc" title="GitHub">
                    <i class="footer__redes_sociais__icon fa-brands fa-github"></i>
                </abbr>
            </li>
        </ul>
        <!-- <span id="nome-dev">Developer by Gabriel Oliveira</span> -->
    </footer>
    <script src="./js/privilegios.js"></script>
    <script src="./js/javascript.js"></script>
    <!-- Js BootStrap -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
</body>

</html>