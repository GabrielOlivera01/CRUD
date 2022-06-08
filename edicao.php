<?php	

require_once "config.php";

$usuarioEdicao = $_POST["edituser"];
$nomeEdicao = $_POST["editname"];
$senhaEdicao = $_POST["editsenha"];
$emailEdicao = $_POST["editemail"];

$obj = new Sql();
$dataUserUpdate = $obj->atualizaDados($usuarioEdicao, $nomeEdicao, $senhaEdicao, $emailEdicao);

print_r($dataUserUpdate);
$msg = "Atualização concluida com sucesso!";
echo $msg;

?>