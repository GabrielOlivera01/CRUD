<?php	

require_once "config.php";

$usuarioEdicao = $_POST["edituser"];
$nomeEdicao = $_POST["editname"];
$senhaEdicao = $_POST["editsenha"];
$emailEdicao = $_POST["editemail"];

$obj = new Sql();
$dataUserUpdate = $obj->atualizaDados($usuarioEdicao, $nomeEdicao, $senhaEdicao, $emailEdicao);

$alert = "Atualização concluida com sucesso!";
echo "<script>window.alert('".$alert."')</script>";
echo "<script>window.location = 'index.php'</script>"

?>