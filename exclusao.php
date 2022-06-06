<?php

require_once "config.php";

$idUser = $_POST['deluser'];

$obj = new Sql();
$obj->deletaUsuario($idUser);


?>