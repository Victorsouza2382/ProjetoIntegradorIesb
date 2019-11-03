<?php
    include_once "conexao.php";

    class Tema{
        protected $tema;
    
        public function adicionarTema($dados){

            $conexao = new Conexao();
            
            $conexao->set_session_id(3);
            $id = $conexao->get_session_id();

            echo $id;
            $conexao->conectar();
            $stmt = $conexao->getConexao();

            $sql = $stmt->prepare("insert into tema (tema, id_foto) values(?,?)");
            $sql->bindValue(1, $dados['tema']);
            $sql->bindValue(2, $id);
            $sql->execute(); 
            print_r($sql);
            //header('location:discussao.php');
        }

    }
?>