<?php
    
    class Tema{
        protected $tema;
    
        public function adicionarTema($dados){
            $conexao = new Conexao();
            $conexao->getConexao();
            $stmt = $conexao->conectar();

            $stmt->prepare("insert into tema (tema, id_foto) values(?,?)");
            $stmt->bindValue(1, $dados['tema']);
            $stmt->bindValue(2, $_SESSION['id']);
            $stmt->execute(); 
        }

    }
?>