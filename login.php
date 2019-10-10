<?php /*
    include_once 'conexao.php';

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $sql = "select * from usuario where login='$login' and senha='$senha'";


    foreach($registros as $registro){
        if ($login == $registro['login'] && $senha == $registro['senha']){
            header("location: PaiginaInicial.php"); 
        }
    }*/

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $sql = "select * from usuario where email_user='$login' and senha_user='$senha'";

    $conexao = new PDO('mysql:host=localhost;dbname=forumpi;charset=utf8','root','') or die("Conexão não estabelecida com o banco de dados!");
    $result = $conexao->query($sql);
    $cargos = $result->fetchAll(2);

    foreach($cargos as $cargo){
        if ($login == $cargo['login'] && $senha == $cargo['senha']){
            header("paigina.html"); 
        }
    }
    echo"<script language='javascript' type='text/javascript'>
    alert('Email e/ou senha incorretos');
    window.location.href='paigina.html';</script>";
    ?>