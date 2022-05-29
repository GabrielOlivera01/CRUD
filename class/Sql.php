<?php

class Sql {

    private $conn;

    function __construct(){

        $this->conn = new PDO("mysql:dbname=db_cadastrousuario;host=127.0.0.1", "root", "");
    }

    public function cadastraUsuario($username, $password, $email){

        $stmt = $this->conn->prepare("INSERT INTO tb_usuarios (usernameusuario, passwordussuario, emailusuario) VALUES('$username', '$password', '$email');");

        $stmt->execute();
    }

}

?>