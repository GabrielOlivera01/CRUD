<?php

class Sql extends PDO {

    private $conn;

    function __construct(){

        $this->conn = new PDO("mysql:dbname=CRUD;host=127.0.0.1", "root", "");
    }

    public function cadastraUsuario($username, $password, $email){

        $stmt = $this->conn->prepare('INSERT INTO tb_usuarios (usernameusuario, passwordussuario, emailusuario) VALUES (:username, :passuser, :email);');
        
        $stmt->bindValue(':username', $username);
        $stmt->bindValue(':passuser', md5($password));
        $stmt->bindValue(':email', $email);
        $stmt->execute();
    }

    public function listaUsuariosCadastrados(){

        $stmt = $this->conn->prepare("SELECT * FROM tb_usuarios;");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function atualizaDados($usuarioEdicao){

        $stmt = $this->conn->prepare("SELECT * FROM tb_usuarios WHERE usernameusuario = '$usuarioEdicao';");
        $stmt->execute();

        $dataUserUpdate = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $idUserUpdate = $dataUserUpdate[0]['idusuario'];

        // Atualiza Nome
        $stmt = $this->conn->prepare("UPDATE tb_usuarios SET usernameusuario = 'NOVO.USERNAME' WHERE idusuario = $idUserUpdate;");
        $stmt->execute();
        
        // Atualiza Senha
        $stmt = $this->conn->prepare("UPDATE tb_usuarios SET passwordussuario = 'NOVO PASSWORD' WHERE idusuario = $idUserUpdate;");
        $stmt->execute();

        // Atualiza E-mail
        $stmt = $this->conn->prepare("UPDATE tb_usuarios SET emailusuario = 'EMAIL.NEW@EMAIL.COM' WHERE idusuario = $idUserUpdate;");
        $stmt->execute();

        return "Atualização efetuada com sucesso!";
    }

    public function deletaUsuario($idUser){

        $stmt = $this->conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID;");
        $stmt->bindValue('ID', $idUser);
        $stmt->execute();
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