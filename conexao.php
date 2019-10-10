<?php
    class Conexao {
	
        private $host 	  = 'forumpi';
        private $user 	  = 'root';
        private $password = '';
        private $db       = 'forumpi';
        
        protected $conexao;
        
        public function conectar()
        {
            $this->conexao = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db . ';charset=utf8', $this->user, $this->password);
        }
        
        public function desconectar()
        {
            $this->conexao = null;
        }
        
        public function executar($sql)
        {
            $this->conectar();
            $this->conexao->query($sql);
            $retorno = $this->conexao->lastInsertId();
            $this->desconectar();
            
            return $retorno;
        }
        
        public function recuperarTodos($sql)
        {
            $this->conectar();
            $resultado = $this->conexao->query($sql);
            $registros = $resultado->fetchAll(2);
            $this->desconectar();
    
            return $registros;
        }
    }


?>