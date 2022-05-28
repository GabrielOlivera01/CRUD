<?php	

require_once "config.php";

echo "Página de edição";

$usuarioEdicao = $_POST["edituser"];
$nomeEdicao = $_POST["editname"];
$senhaEdicao = $_POST["editsenha"];
$emailEdicao = $_POST["editemail"];

echo $usuarioEdicao;
echo "<br>";
echo $nomeEdicao;
echo "<br>";
echo $senhaEdicao;
echo "<br>";
echo $emailEdicao;

$obj = new Sql();




?>