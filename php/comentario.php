<?php
include_once 'conexao.php';

    class Comentario{

        public function adicionarCometarios($dados, $id){
            $conexao = new Conexao();
            $conexao->conectar();
            $stmt = $conexao->getConexao();

            $sql = $stmt->prepare("insert into comentario values(?)");
            $sql->bindValue(1, $dados['comentario']);
            $sql->execute();

            $comentario = $sql->fetchAll(PDO::FETCH_ASSOC);

            echo "";
        
        }

        public function listarComentarios(){
            $conexao = new Conexao();
            $conexao->conectar();
            $stmt = $conexao->getConexao();

            $sql = $stmt->prepare("select usuario. from comentario values()");
        }
    }
?>