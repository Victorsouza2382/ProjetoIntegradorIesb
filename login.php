<?php 
    include_once 'conexao.php';

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $sql = "select * from usuario where email_user='$login' and senha_user='$senha'";

    $conexao = new Conexao();
    $conexao->conectar();
    $stmt=  $conexao->getConexao();
    
    $result = $stmt->prepare($sql); 
     $result->execute();
    $usuarios = $result->fetchAll($result,PDO::FETCH_OBJ);
    print_r($usuarios);
    foreach($usuarios as $usuario){
        if ($login == $usuario['login'] && $senha == $usuario['senha']){
            header("paigina.html"); 
        }

    }
   

    echo"<script language='javascript' type='text/javascript'>
    alert('Email e/ou senha incorretos');
    window.location.href='PaiginaInicial.html';</script>";
    ?>