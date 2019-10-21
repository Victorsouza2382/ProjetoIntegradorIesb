<?php
    include_once 'conexao.php';

    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $confirme = $_POST['confirme'];
    $email = $_POST['email'];
    $contato = $_POST['contato'];
    $sexo = $_POST['sexo'];

    if($senha != $confirme){
        echo "Senhas diferentes, favor repita a operação!";
        die;
    }else{
            $conexao = new Conexao();
            /*$conexao->executar($sql);*/
            $conexao->conectar();
            $stmt = $conexao->getConexao();

            $sql = $stmt->prepare("
            insert into usuario (login,senha,email,contato,sexo) 
            values (?,?,?,?,?)");
            $sql->bindValue(1, $login);
            $sql->bindValue(2, $senha);
            $sql->bindValue(3, $email);
            $sql->bindValue(4, $contato);
            $sql->bindValue(5, $sexo);           

            $sql->execute();           

            echo "<h2>Cadastro realizado!</h2><br>";
    }