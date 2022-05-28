<?php

require_once "config.php";

$username = $_POST["caduser"];
$password = $_POST["cadpass"];
$email = $_POST["cademail"];


$obj = new Sql();
$obj->cadastraUsuario($username, $password, $email);

echo "Cadastro efetuado com sucesso!";

?>