<?php
    
    class Foto{
        protected $local_foto;
    
        public function adicionarFoto($local, $id){
            $conexao = new Conexao();
            $conexao->conectar();
            $stmt = $conexao->getConexao();

            $sql = $stmt->prepare("insert into foto(id_foto, local_foto, usuario_id_usuario) values(?, ?, ?)");
            $sql->bindValue(1, $id);
            $sql->bindValue(2, $local);
            $sql->bindValue(3, $id);
            $sql->execute(); 
        }
    }
?>