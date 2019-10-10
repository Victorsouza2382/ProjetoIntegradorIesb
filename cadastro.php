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
            $sql = "insert into usuario (login,senha,email,telefone,sexo) 
            values ('$login','$senha','$email','$contato','$sexo')";
           

            echo "<h2>Cadastro realizado!</h2><br>";
    }