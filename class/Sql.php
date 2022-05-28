<?php

class Sql {

    function __Construct(){

        $conn = new PDO("mysql:dbname=db_cadastrousuario;host=127.0.0.1", "root", "");
    }

    public function cadastraUsuario($username, $password, $email){

        $conn = new PDO("mysql:dbname=db_cadastrousuario;host=127.0.0.1", "root", "");

        $stmt = $conn->prepare("INSERT INTO tb_usuarios (usernameusuario, passwordussuario, emailusuario) VALUES('$username', '$password', '$email');");

        $stmt->execute();
    }

    public function atualizaUsuario($nameUsuario, $newNameUsuario, $newSenhaUsuario, $newEmailUsuaio){

    	$conn = new PDO("mysql:dbname=db_cadastrousuario;host=localhost", "root", "");

    	$stmt = $conn->prepare("UPDATE tb_usuarios SET usernameusuario = '$newNameUsuario' WHERE usernameusuario = '$nameUsuario';");

    	$stmt->execute();
    }

    // public function excluiUsuario($nameUsuario) {

    // 	$conn = new PDO("mysql:dbname=db_cadastrousuario;host=127.0.0.1", "root", "");

    // 	$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE usernameusuario = "$nameUsuario";");
    // }

}


?>