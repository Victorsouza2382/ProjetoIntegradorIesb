<?php
    include_once 'conexao.php';

    

    class Cadastro{
        protected $login;
        protected $senha;
        protected $confirme;
        protected $email;
        protected $contato;
        protected $sexo;

        public function validaLogin($dados){
            if($dados['senha'] != $dados['confirme']){
                echo "Senhas diferentes, favor repita a operação!";
                die;
            }else{
                $conexao = new Conexao();
                /*$conexao->executar($sql);*/
                $conexao->conectar();
                $stmt = $conexao->getConexao();
    
                $sql = $stmt->prepare("
                insert into usuario (login,senha,email) 
                values (?,?,?)");

                $sql->bindValue(1, $dados['login']);
                $sql->bindValue(2, $dados['senha']);
                $sql->bindValue(3, $dados['email']);     
    
                $sql->execute();
                
               
             echo "<h2>Cadastro realizado!</h2><br>";
            }
        }       
    }
   
?>