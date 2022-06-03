<?php

require_once "config.php";

$obj = new Sql();
$listaDeUsuarios = $obj->listaUsuariosCadastrados();

// var_dump($listaDeUsuarios);
// echo "<br><br><br>";

echo json_encode($listaDeUsuarios);


?>