<?php 
    include_once 'conexao.php';

    class login{
        protected $login;
        protected $senha;

        function logar($dados){

            $conexao = new Conexao();
            $conexao->conectar();
            $stmt=$conexao->getConexao();
            $sql = $stmt->prepare("select * from usuario where login=? and senha=?");
            $sql->bindValue(1, $dados['login']);
            $sql->bindValue(2, $dados['senha']);            
            $sql->execute();

            $usuarios = $sql->fetchAll(PDO::FETCH_ASSOC);

            echo '<pre>';
            print_r($usuarios); 
            
            foreach($usuarios as $usuario){
                if ($dados['login'] == $usuario['login'] && $dados['senha'] == $usuario['senha']){
                    header("location: ../index.php?id=$usuario[id_usuario]");
                    session_start();
                    $SESSION['id'] = $usuario['id_usuario'];
                }

            }
        }
        
    }
    
   

   
    ?>