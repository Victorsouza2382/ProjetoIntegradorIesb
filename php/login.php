<?php 
    include_once 'conexao.php';
    include_once 'usuario.php';

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
                        $usuario = new Usuario();
                        $usuario->set_id($dados['login'], $dados['senha']);
                        $id = $usuario->get_id();
                        header("location: processamento.php?id=$id");
                    }else{
                        $this->erro = true;
                    }
                }
            }else{
                $this->erro = true;  
            }

            if($this->erro){
                 header('location: ../Paginas/login.php?erro');
            }

        }
    }
    
   

   
    ?>