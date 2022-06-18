<?php

require_once "config.php";

$username = $_POST['user'];
$password = $_POST['pass'];
$email = $_POST['mail'];

$novoCadastro = new Sql();
$resCadastro = $novoCadastro->cadastraUsuario($username, $password, $email);

if ($resCadastro) {
    $alert = "Cadastro efetuado com sucesso!";
}else{
    $alert = "Nome de usuário não disponivel";
}

echo "<script>alert('".$alert."')</script>";
echo "<script>location.href = './index.php'</script>";

?>