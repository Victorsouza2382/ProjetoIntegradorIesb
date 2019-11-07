<?php
    include_once "conexao.php";
    
    class Tema{
        protected $tema;
    
        public function adicionarTema($dados, $id){

            $conexao = new Conexao();
            $conexao->conectar();
            $stmt = $conexao->getConexao();

            $sql = $stmt->prepare("insert into tema (tema, id_foto) values(?,?)");
            $sql->bindValue(1, $dados['tema']);
            $sql->bindValue(2, $id);
            $sql->execute(); 
            //header('location:discussao.php');
        }

    }
?>