<?php
    include_once 'conexao.php';
    include_once 'cadastro.php';
    include_once 'login.php';
    include_once 'usuario.php';
    include_once 'tipo_foto.php';
    include_once 'discussao.php';
    include_once 'tema.php';
    include_once 'foto.php';
    
    
    $acao = isset($_GET['acao']) ? $acao = $_GET['acao'] : null;

    if(isset($_GET['id'])){
        $id = isset($_GET['id']) ? $acao = $_GET['id'] : null;
        $_SESSION['id'] = $id;
        header('location: ../index.php?logado');
    }
    
    switch($acao){
        case 'cadastro':
            //cadastro
            $cadastro = new Cadastro();
            $cadastro->validaLogin($_POST);
            //usuario
            $usuario = new Usuario();
            $id = $usuario->ultimo_id();
            //foto
            $foto = new Foto();
            $foto->adicionarFoto("../img-usuarios/default_user_image.png", $id);
            //tipo da foto
            $tipo_foto = new TipoFoto();
            $tipo_foto->salvar_tipo_foto($id, 'perfil');

            header('location: ../index.php');
            break;
        case 'login':
            $login = new Login();
            $login->logar($_POST);   
            break;
        case 'discussao':
            // //usuario
            $usuario = new Usuario();
            // //tema
            $tema = new Tema();
            $tema->adicionarTema($_POST, $_SESSION['id']);
            $discussao = new Discussao();
            $discussao->adicionarDiscussao($_POST, $_SESSION['id']); 
            header('location: ../Paginas/discussao.php');  
            break;      
        case 'logoff':
            $conexao = new Conexao();
            $conexao->destruir_session();
            break;
    }
   
?>