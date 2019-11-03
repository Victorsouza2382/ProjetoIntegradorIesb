<?php 
    include_once 'conexao.php';

    class Login{
        protected $login;
        protected $senha;
        protected $erro = false;


        function logar($dados){

            $conexao = new Conexao();
            $conexao->conectar();
            $stmt=$conexao->getConexao();
            $sql = $stmt->prepare("select * from usuario where login=? and senha=?");
            $sql->bindValue(1, $dados['login']);
            $sql->bindValue(2, $dados['senha']);
            $sql->execute();

            $usuarios = $sql->fetchAll(PDO::FETCH_ASSOC);
            
            if(!empty($usuarios)){
            
                foreach($usuarios as $usuario){
                    
                    if ($dados['login'] == $usuario['login'] && $dados['senha'] == $usuario['senha']){  
                        $conexao->criar_session();
                        $conexao->set_session_id($usuario['id_usuario']);                        
                        header("location: ../index.php?id=$usuario[id_usuario]");
                    }else{
                        $erro = true;
                    }
                }
            }else{
                $erro = true;   
            }
        }

        function erro($text){
            if($this->erro){
                echo $text;
                header("location: ../Paginas/login.php");
            }
            
        }
        
    }
    
   

   
    ?>