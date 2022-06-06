<?php

class Sql extends PDO {

    private $conn;

    function __construct(){

        $this->conn = new PDO("mysql:dbname=CRUD;host=127.0.0.1", "root", "");
    }

    public function cadastraUsuario($username, $password, $email){

        $stmt = $this->conn->prepare('INSERT INTO tb_usuarios (usernameusuario, passwordussuario, emailusuario) VALUES (:username, :passuser, :email);');
        
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

    public function atualizaDados($usuarioEdicao, $nomeEdicao = "", $senhaEdicao = "", $emailEdicao = ""){

        $stmt = $this->conn->prepare("SELECT * FROM tb_usuarios WHERE usernameusuario = :usuarioEdicao;");
        $stmt->bindValue(':usuarioEdicao', $usuarioEdicao);
        $stmt->execute();

        $dataUserUpdate = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $idUserUpdate = $dataUserUpdate[0]['idusuario'];

        // Atualiza Nome
        $stmt = $this->conn->prepare("UPDATE tb_usuarios SET usernameusuario = :nomeEdicao WHERE idusuario = :idUserUpdate;");
        $stmt->bindValue(':nomeEdicao', $nomeEdicao);
        $stmt->bindValue(':idUserUpdate', $idUserUpdate);
        $stmt->execute();
        
        // Atualiza Senha
        $stmt = $this->conn->prepare("UPDATE tb_usuarios SET passwordussuario = :senhaEdicao WHERE idusuario = :idUserUpdate;");
        $stmt->bindValue(':senhaEdicao', $senhaEdicao);
        $stmt->bindValue(':idUserUpdate', $idUserUpdate);
        $stmt->execute();

        // Atualiza E-mail
        $stmt = $this->conn->prepare("UPDATE tb_usuarios SET emailusuario = :emailEdicao WHERE idusuario = :idUserUpdate;");
        $stmt->bindValue(':emailEdicao', $emailEdicao);
        $stmt->bindValue(':idUserUpdate', $idUserUpdate);
        $stmt->execute();

        return "Atualização efetuada com sucesso!";
    }

    public function deletaUsuario($nomeUserDelet){

        $stmt = $this->conn->prepare("SELECT * FROM tb_usuarios WHERE usernameusuario = :nomeUserDelet;");
        $stmt->bindValue(':nomeUserDelet', $nomeUserDelet);
        $stmt->execute();

        $dataUserDelet = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $idUserDelet = $dataUserDelet[0]['idusuario'];

        $stmt = $this->conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :id;");
        $stmt->bindValue(':id', $idUserDelet);
        $stmt->execute();

        echo "Usuário excluido com sucesso!";
    }
}

?>