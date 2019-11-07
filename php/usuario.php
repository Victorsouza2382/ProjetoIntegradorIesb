<?php

    include_once 'conexao.php';

class Usuario{
    protected $login;
    protected $senha;
    protected $email;
    private $id;

    function set_id($login, $senha){
        $conexao = new Conexao();
        $conexao->conectar();
        $sql = $conexao->getConexao();

        $stmt = $sql->prepare("select id_usuario from usuario where login = ? and senha = ?");
        $stmt->bindValue(1, $login);
        $stmt->bindValue(2, $senha);
        $stmt->execute();

        $this->id = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function get_id(){
       return $this->id['id_usuario'];
    }

    function ultimo_id(){
        $conexao = new Conexao();
        $conexao->conectar();
        $sql = $conexao->getConexao();

        $stmt = $sql->prepare("select id_usuario from usuario order by id_usuario desc limit 1");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return intval($result['id_usuario']);
    }
}

?>