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
    <!-- Variaveis CSS -->
    <link rel="stylesheet" href="./css/root.css">
    <!-- CSS Principal -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Icones Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Solid Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/solid.min.css"
        integrity="sha512-qzgHTQ60z8RJitD5a28/c47in6WlHGuyRvMusdnuWWBB6fZ0DWG/KyfchGSBlLVeqAz+1LzNq+gGZkCSHnSd3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS Footer -->
    <link rel="stylesheet" href="./css/style-footer.css">
</head>
<span id="privilegio"><?php echo $privilegio; ?></span>
<body>
    <header class="l-header">
        <div class="l-header__box__left">
            <h1 class="fa-solid l-header__title">Controle de Usuarios</h1>
        </div>
        <div class="l-header__box__rigth">
            <i id="usuario-logado" class="fa-solid fa-user"></i>
            <a id="a-usuario-log-out" href="index.php">
                <i id="usuario-log-out" class="fa-solid fa-arrow-right-from-bracket"></i>
            </a>
            <label id="lb-usuario-logado" for="usuario-logado"><?php echo $_SESSION['usuarioLogado']; ?></label>
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
        <nav>
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
                <label for="editname">Novo Nome</label>
                <input id="editname" name="editname" type="text" required>
                <label for="editsenha">Nova Senha</label>
                <input id="editsenha" name="editsenha" type="password" required>
                <label for="editemail">Novo E-mail</label>
                <input id="editemail" name="editemail" type="email" required>
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
    <?php
        require_once "footer.php";
    ?>
    <script src="./js/privilegios.js"></script>
    <script src="./js/javascript.js"></script>
</body>

</html>