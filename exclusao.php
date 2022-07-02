<?php
session_start();

require_once "config.php";

$usuarioLogado = $_SESSION['usuarioLogado'];

$username = $_POST['deluser'];
$password = $_POST['delpass'];

$obj = new Sql();
$privilegio = $obj->verificaPrivilegio($usuarioLogado);

if ($privilegio == 1) {
    $alert = $obj->deletaUsuario($username, $password);
    echo "<script>alert('".$alert."')</script>";
    echo "<script>location.href = 'controle-usuarios.php'</script>";
}else{
    if ($username === $usuarioLogado){
        $alert = $obj->deletaUsuario($username, $password);
        echo "<script>alert('".$alert."')</script>";
        echo "<script>location.href = 'index.php'</script>"; 
    }else{
        $alert = "Sem permissão para excluir outros usuários";
        echo "<script>window.alert('".$alert."')</script>";
        echo "<script>window.location = 'controle-usuarios.php'</script>";
    }

}






?>