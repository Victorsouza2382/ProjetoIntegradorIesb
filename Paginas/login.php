<?php
    include_once "../php/processamento.php";
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
                
                <div class="card-body">
                    <form action="../php/processamento.php?acao=login" method="POST">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" id="Usuariologin" name="login" class="form-control" placeholder="Usuário">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" id="Senhalogin" name="senha" class="form-control" placeholder="Senha">
                        </div>
                        <?php
                            if(isset($_GET['erro'])){
                                echo "<p style='color:red;'>" . "O usuario ou senha incorreto" . "</p>";
                            }
                        ?>
                        <div class="form-group">
                            <button type="submit"  class="btn btn-outline-secondary">Entrar</button>
                        </div>
                       
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Não tem conta? <a href="cadastro.php">Cadastre-se</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>