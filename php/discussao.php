<?php
    include_once 'conexao.php';

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
            $conexao = new Conexao();
            $conexao->conectar();
            $stmt = $conexao->getConexao();

            $sql = $stmt->prepare("select discussao.discussao, tema.tema, usuario.login, usuario.id_usuario 
            from discussao, tema, usuario where(discussao.id_discussao = tema.id_tema and usuario.id_usuario = discussao.id_discussao)");
            $sql->execute();
            $discussoes = $sql->fetchAll(PDO::FETCH_ASSOC);
          
            foreach($discussoes as $discussao){
                echo  "<a href='../Paginas/discussao_usuario.php?discussao=$discussao[id_usuario]'>";
                echo  "<strong>Tema: </strong> " . $discussao['tema'] . " - ";
                echo  "<strong>Discussao: </strong>" . $discussao['discussao'] . " - ";
                echo  "<strong>Usuario: </strong>: " . $discussao['login'];
                echo  "</a ><br>";

            }
        }

        public function listarDicussaoUsuario($id){
            $conexao = new Conexao();
            $conexao->conectar();
            $stmt = $conexao->getConexao();
            
            $sql = $stmt->prepare("select discussao.discussao, tema.tema, usuario.login
            from discussao, tema, usuario where(usuario.id_usuario = $id and discussao.id_discussao = $id and tema.id_tema = $id)");
            $sql->execute();

            $discussoes = $sql->fetchAll(PDO::FETCH_ASSOC);
            foreach($discussoes as $discussao){
               
                echo  "<strong>Tema: </strong> " . $discussao['tema'] . " - ";
                echo  "<strong>Discussao: </strong>" . $discussao['discussao'] . " - ";
                echo  "<strong>Usuario: </strong>: " . $discussao['login'];
            
            }
        }


    }
?>