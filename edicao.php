<?php	
session_start();

require_once "config.php";

$usuarioLogado = $_SESSION['usuarioLogado'];

$usuarioEdicao = $_POST["edituser"];
$nomeEdicao = $_POST["editname"];
$senhaEdicao = $_POST["editsenha"];
$emailEdicao = $_POST["editemail"];

$obj = new Sql();
$privilegio = $obj->verificaPrivilegio($usuarioLogado);

if ($privilegio == 1) {
    $dataUserUpdate = $obj->atualizaDados($usuarioEdicao, $nomeEdicao, $senhaEdicao, $emailEdicao);
    $alert = $dataUserUpdate;
    echo "<script>window.alert('".$alert."')</script>";
    echo "<script>window.location = 'controle-usuarios.php'</script>";
}else{
    if ($usuarioEdicao === $usuarioLogado) {
        $dataUserUpdate = $obj->atualizaDados($usuarioEdicao, $nomeEdicao, $senhaEdicao, $emailEdicao);
        $alert = $dataUserUpdate;
        echo "<script>window.alert('".$alert."')</script>";
        echo "<script>window.location = 'controle-usuarios.php'</script>";
    }else{
        $alert = "Sem permissão para editar outros usuários";
        echo "<script>window.alert('".$alert."')</script>";
        echo "<script>window.location = 'controle-usuarios.php'</script>";
    }
}

?>