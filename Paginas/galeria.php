<?php
    include_once '../php/foto.php';

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
            <?php
                $fotos = new Foto();
                $fotos->mostrar_todas_fotos();
            ?>
        </div>
    </div>
</body>

</html>
