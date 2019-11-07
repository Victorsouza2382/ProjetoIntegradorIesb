<?php
    

    class Discussao{
        protected $discussao;

        public function adicionarDiscussao($dados, $id){
            
            $conexao = new Conexao();
            $conexao->conectar();
            $stmt = $conexao->getConexao();

            $sql = $stmt->prepare("insert into discussao (discussao, id_tema, id_usuario) values(?,?,?)");
            $sql->bindValue(1, $dados['discussao']);
            $sql->bindValue(2, $id);
            $sql->bindValue(3, $id);
            $sql->execute();            
        }

        public function listarDiscussoes(){

        }
    }
?>