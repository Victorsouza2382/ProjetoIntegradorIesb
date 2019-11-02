<?php
    
    class Discussao{
        protected $discussao;

        public function adicionarDiscussao($dados){
            
            $conexao = new Conexao();
            $conexao->getConexao();
            $stmt = $conexao->conectar();

            $stmt->prepare("insert into discussao (discussao, id_tema, id_usuario) values(?,?,?)");
            $stmt->bindValue(1, $dados['discussao']);
            $stmt->bindValue(2, $_SESSION['id']);
            $stmt->bindValue(3, $_SESSION['id']);
            $stmt->execute();            
        }

        public function listarDiscussoes(){

        }
    }
?>