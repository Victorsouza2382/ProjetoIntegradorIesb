<?php
    include_once 'conexao.php';

    class Foto{
        protected $local_foto;
    
        public function adicionarFoto($dados, $id){
            $conexao = new Conexao();
            $conexao->conectar();
            $stmt = $conexao->getConexao();

            $target = "../img_usuarios/".basename($_FILES['imagem']['name']);
            

            $imagem = $_FILES['imagem']['name'];

            $sql = $stmt->prepare("insert into foto(id_foto, local_foto, usuario_id_usuario) values(?, ?, ?)");
            $sql->bindValue(1, $id);
            $sql->bindValue(2, $imagem);
            $sql->bindValue(3, $id);
            $sql->execute(); 
            
            if(move_uploaded_file($_FILES['imagem']['tmp_name'], $target)){
                $msg = "image upload successfuly";
            }else{
                $msg = "there was a problem uploading the image";
            }
        }

        public function mostrarFoto_usuario($id){
            $conexao = new Conexao();
            $conexao->conectar();
            $stmt = $conexao->getConexao();

            $sql = $stmt->prepare("select local_foto from foto where usuario_id_usuario = ?");
            $sql->bindValue(1, $id);
            $sql->execute();

            $fotos = $sql->fetchAll(PDO::FETCH_ASSOC);

            foreach($fotos as $foto){
                echo "<img src='../img_usuarios/" . $foto['local_foto'] . "' style='width:auto; height:200px'>";
            }

        }

        public function mostrar_todas_fotos(){
            $conexao = new Conexao();
            $conexao->conectar();
            $stmt = $conexao->getConexao();

            $sql = $stmt->prepare("select local_foto from foto");
            $sql->execute();

            $fotos = $sql->fetchAll(PDO::FETCH_ASSOC);

            foreach($fotos as $foto){
                if($foto['local_foto'] != null){
                    echo "<img src='../img_usuarios/" . $foto['local_foto'] . "' style='width:auto; height:200px'>";
                }
            }

        }
    }
?>