<!DOCTYPE html>
<!--Inicio do Codigo (feito por Victor De Souza)  -->
<html lang="pt-br" class="h-100">

<head>
    <meta charset="UTF-8">
    <title>Kill Fire</title>
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/pagina_inicial.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body class="d-flex flex-column h-100 ">
    <header>

        <!-- Menu do Forum -->
        <nav style="position: absolute;" class="navbar navbar-expand-md fixed-top navbar-size bg-size">
            <a class="navbar-brand" href="#"><img id="pagilogo" src="../ProjetoIntegradorIesb/img/Logo Kill Fire.png" alt="logo"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <form class="form-inline mt-2 mt-md-0 ml-auto">
                    <input class="form-control mr-sm-2 form-control-sm" type="search" placeholder="Pesquisa" aria-label="">
                    <button style="margin-right: 300px;" class="btn btn-outline-success btn-sm" type="submit">Buscar</button>
                </form>
                <div class="ml-auto">
                    <ul class="navbar-nav mr-auto">
                        <?php
                            if(!isset($_GET['id'])){
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="paginas/login.html"><button type="button" class="btn btn-outline-primary btn-md" data-toggle="modal" data-target="modal">Login</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Paginas/cadastro.html"><button type="button" class="btn btn-outline-primary btn-md">Registrar</button></a>
                        </li>  
                        <?php
                            }else{
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><button type="button" class="btn btn-outline-primary btn-md" data-toggle="modal" data-target="modal">Perfil</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><button type="button" class="btn btn-outline-primary btn-md">Log off</button></a>
                        </li> 
                        <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="row mb-5 "><br>
        <div id="post_inicial" class="col-lg-12 d-flex align-items-center justify-content-center  flex-column">
            <div>
                <br><br><br><br><br><br>
                <i style="margin-right: 20px;" class="fa fa-users fa-3x" aria-hidden="true"></i>
                <i class="fa fa-gamepad fa-5x" aria-hidden="true"></i>
                <i style="margin-left: 20px;" class="fa fa-comments fa-3x" aria-hidden="true"></i>
            </div>
            <div><br>
                <h5>Forum sobre Games em geral</h5>
            </div>
        </div>
        <div class="sidebar-container">

            <ul class="sidebar-navigation">

                <li>
                    <a href="Paginas/discussao.html">
                        <i class="fa fa-comments" aria-hidden="true"></i>
                        <span>Discussão</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                        <span> Agradecimentos</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-file" aria-hidden="true"></i>
                        <span>Temas</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-camera" aria-hidden="true"></i>
                        <span>Galeria</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                        <span>Informações</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>