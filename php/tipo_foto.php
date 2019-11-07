<?php

    include_once 'conexao.php';

    class TipoFoto{
        protected $tipo;
        protected $id_foto;

        function salvar_tipo_foto($id_foto, $tipo){
            $conexao = new Conexao();
            $conexao->conectar();
            $sql = $conexao->getConexao();

            $stmt = $sql->prepare('insert into tipo_foto(id_foto, tipo) values(?, ?)');
            $stmt->bindValue(1, $id_foto);
            $stmt->bindValue(2, $tipo);
            $stmt->execute();
            

        }
    }
?>  