<?php

class Sql extends PDO {

    private $conn;

    function __construct(){

        $this->conn = new PDO("mysql:dbname=db_cadastrousuario;host=127.0.0.1", "root", "");
    }

    public function cadastraUsuario($username, $password, $email){

        $stmt = $this->conn->prepare('INSERT INTO tb_usuarios (usernameusuario, passwordussuario, emailusuario) VALUES (:username, :passuser, :email)');
        
        $stmt->bindValue(':username', $username);
        $stmt->bindValue(':passuser', $password);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
    }

    public function listaUsuariosCadastrados(){

        $stmt = $this->conn->prepare("SELECT * FROM tb_usuarios;"); 
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Copiado..

    // private function setParams($statment, $parameters = array()){

    //     foreach ($parameters as $key => $value){

    //         $this->setParam($statment, $key, $value);
    //     }

    // }

    // private function setParam($statment, $key, $value){

    //     $statment->bindParam($key, $value);
    // }

    // public function query($rawQuery, $params = array()){

    //     $stmt = $this->conn->prepare($rawQuery);

    //     $this->setParams($stmt, $params);

    //     $stmt->execute();

    //     return $stmt; 

    // }

    // public function select($rawQuery, $params = array()):array {

    //     $stmt = $this->query($rawQuery, $params);

    //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
    // }

}

?>