<?php
session_start();

require_once "config.php";

$usuario = $_POST['usuario'];
$_SESSION['usuarioLogado'] = $usuario;
$senha = $_POST['senha'];

$obj = new Sql();
$resLogin = $obj->validaLogin($usuario, $senha);

if ($resLogin){
    $alert = "Seja bem vindo!";
    echo "<script>alert('".$alert."')</script>";
    echo "<script>window.location = './controle-usuarios.php'</script>";
}else{
    $alert = "Login inválido";
    echo "<script>alert('".$alert."')</script>";
    echo "<script>window.location = './index.php'</script>";
}

?>