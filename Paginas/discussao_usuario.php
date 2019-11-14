<?php
    include_once '../php/discussao.php';

    
?>
<!DOCTYPE html>
<html>

<head>
    <title>Kill Fire</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="../ProjetoIntegradorIesb/style.css">
    <link rel="stylesheet" href="../ProjetoIntegradorIesb/bootstrap-4.3.1-dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
              <?php
                $discussao = new Discussao();
                $discussao->listarDicussaoUsuario($_GET['discussao']);
              ?>
            </div>
        </div>
        <div>
            <?php 
                if(isset($_GET['listar'])){
            ?>
                <div>
                     <?php 
                        $comentario = new Comentario();
                        $comentario->listarCometarios($_GET['listar']);

                     ?>
                </div>

            <?php
                }
            ?>
        </div>
        <div>
            <form action="discussao_usuario.php?listar=$_SESSION['id']">
                <textarea type="text" required></textarea>
                <button type="submit" value="Enviar">Enviar</button>
                <button type="reset" value="Limpar">Limpar</button>
            </form>
        </div>
    </div>
</body>

</html>