<?php
    
    class Foto{
        protected $foto;
    
        public function adicionarFoto($dados){
            $conexao = new Conexao();
            $conexao->getConexao();
            $stmt = $conexao->conectar();

            $stmt->prepare("insert into foto (local_foto, id_discussao) values(?,?)");
            $stmt->bindValue(2, $_SESSION['id']);
            $stmt->execute(); 
        }

    }
?>