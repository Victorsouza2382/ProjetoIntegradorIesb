<?php
    include_once 'cadastro.php';
    include_once 'login.php';
    
    //----------------Cadastro do usuario-----------
    $acao = $_GET['acao'];

    switch($acao){
        case 'cadastro':
            $cadastro = new Cadastro();
            $cadastro->validaLogin($_POST);
            break;
        case 'login':
            $login = new Login();
            $login->logar($_POST);
            break;
        case 'discussao':
            $tema = new Tema();
            $tema->adicionarTema();
            $discussao = new Discussao();
            $discussao->adicionarDiscussao($_POST);           
            break;
    }
   


?>