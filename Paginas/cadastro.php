<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="../ProjetoIntegradorIesb/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../ProjetoIntegradorIesb/style2.css">
</head>


<body>
    <div>
        <div>
            <center>
                <h2 id="cadastrotopo">Cadastro de Usuário</h2>
            </center>
        </div>
        <form action="../php/processamento.php?acao=cadastro" method="POST" enctype="multipart/form-data">
            <div class="container">
                <div class="d-flex justify-content-center h-100">
                    <div class="card">
                        <div class="card-body">
                            <div class="input-group form-group">
                                <div style="margin-top: 1px" class="form-group">
                                    <label class="label">Login:</label>
                                    <input required name="login" class="form-control" type="text" placeholder="Digite seu login">
                                </div>
                                <div class="form-group">
                                    <label class="label" for=" exampleFormControlInput1 ">Digite uma senha:</label>
                                    <input required name="senha" class="form-control " type="password" placeholder="Digite uma senha ">
                                </div>
                                <div class="form-group ">
                                    <label class="label">Confirme a senha:</label>
                                    <input required name="confirme" class="form-control" type="password" placeholder="Confirme a senha utilizada">
                                </div>
                                <div class="form-group">
                                    <label class="label" for=" exampleFormControlInput1 ">Email:</label>
                                    <input required name="email" type="email" class="form-control " id="exampleFormControlInput1 " placeholder="nome@exemplo.com ">
                                </div>
                                <?php
                                    if(isset($_GET['erro'])){
                                        if($_GET['erro'] = 'usuario'){
                                            echo "<p style='color:red;'>" . "O usuario ja existe" . "</p>";
                                        }
                                    }
                                ?>
                                <div class="form-group">
                                    <label class="label" for="exampleFormControlFile1">Escolha uma foto:</label>
                                    <input  type="file" name="imagem" class="form-control-file">
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <button style="position: relative; left: 450px;" type="submit" class="btn btn-primary">Fazer Cadastro</button>
                    <a href="../index.php"><button style="position: relative; left: 450px;" type="button" class="btn btn-secondary">Voltar</button></a>
                </div>
            </div>
        </form>
    </div>

</body>


</html>