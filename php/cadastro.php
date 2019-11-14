<?php
    include_once 'conexao.php';
    include_once 'foto.php';
    

    class Cadastro{
        protected $login;
        protected $senha;
        protected $confirme;
        protected $email;
        protected $contato;
        protected $sexo;

        public function validaCadastro($dados){
            $conexao = new Conexao();
            /*$conexao->executar($sql);*/
            $conexao->conectar();
            $stmt = $conexao->getConexao();
            $sql = $stmt->prepare('select login from usuario where login = ?');
            $sql->bindValue(1, $dados['login']);
            $sql->execute();

            $usuarios = $sql->fetchAll(PDO::FETCH_ASSOC);

            if($usuarios){
                header('location: ../Paginas/cadastro.php?erro=usuario');
                die;
            }else{
                $this->cadastrar($dados);
            }
        }
        
        public function cadastrar($dados){
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
   
?>