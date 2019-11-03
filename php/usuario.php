<?php

    include_once 'conexao.php';

class Usuario{
    protected $login;
    protected $senha;
    protected $email;

    function get_ultimo_id(){
        $ultimo_id;

        $conexao = new Conexao();
        $conexao->conectar();
        $sql = $conexao->getConexao();

        $stmt = $sql->prepare("select id_usuario from usuario order by id_usuario desc limit 1");
        $stmt->execute();

        $ultimo_id = $stmt->fetch(PDO::FETCH_ASSOC);
        echo $ultimo_id['id_usuario'];
        
        return $ultimo_id['id_usuario'];
    }
}

?>