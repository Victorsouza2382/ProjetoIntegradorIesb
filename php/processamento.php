<?php
    include_once 'conexao.php';
    include_once 'cadastro.php';
    include_once 'login.php';
    include_once 'usuario.php';
    // include_once 'discussao.php';
    // include_once 'tema.php';
    // include_once 'foto.php';
    
    // //----------------Cadastro do usuario-----------
    $acao = isset($_GET['acao']) ? $acao = $_GET['acao'] : null;

    

    switch($acao){
        case 'cadastro':
            //cadastro
            $cadastro = new Cadastro();
            $cadastro->validaLogin($_POST);
            //usuario
            $usuario = new Usuario();
            //foto
            $foto = new Foto();
            $foto->adicionarFoto("../img-usuarios/default_user_image.png", intval($usuario->get_ultimo_id()));
            //header('location: ../index.php');
            break;
        case 'login':
            $login = new Login();
            $login->logar($_POST);
            break;
        case 'discussao':
            echo '<pre>';
            print_r($_POST);
            $tema = new Tema();
            $tema->adicionarTema($_POST);
            // $discussao = new Discussao();
            // $discussao->adicionarDiscussao($_POST);           
            break;
        case 'logoff':
            $conexao = new Conexao();
            $conexao->destruir_session();
            break;
    }
   
?>