<!DOCTYPE html>
<html lang="en">
<head>
    <?php //Metadatos?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sitio web de la Unidad de Vinculación ITD. Instituto Tecnológico de Durango">
    <meta keywords="ITD, Unidad de vinculacion, Cursos ITD, Instituto Tecnologico de Durango, Vinculación">
    <?php //Responsive Design?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Unidad de Vinculación ITD</title>
    <link rel="shortcut icon" href="img/favicon.png">

    <?php //Bootstrap ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <?php //FontAwesome ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/a5f90a0536.css" crossorigin="anonymous">
    <?php //Hoja de estilos ?>
    <link rel="stylesheet" href="css/styles.css">


</head>
<body>
    <?php //Encabezado principal para publico en general ?>
    <header>
        <nav class="navbar fixed-top navbar-expand-xl " style="background-color: #ffffff;" >
            <div class="container-fluid ">

                <a class="navbar-brand" href="index.php">
                    <img src="img/logo_uvinculacion.png"  alt="Unidad de Vinculación ITD" width="260" height="50">
                </a>

                <?php //Boton hamburguesa ?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse navbar-center" id="navbarTogglerDemo02">
                    
                    
                    <ul class="navbar-nav  me-auto mb-2 mb-lg-0" style="text-align: center;">
                        <li class="nav-item">
                            <a class="nav-link p-3" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-3" href="curses_index.php">Cursos</a>
                        </li>
                    </ul>

                    
                    <form class="d-flex p-2 flex-fill" role="search">
                        <input class="form-control ms-1 me-2 " type="search" placeholder="Buscar en el sitio " aria-label="Search" style="text-align: left;">
                        <button class="btn btn-outline-success me-1"  type="submit"> <i class="fa-solid fa-magnifying-glass"></i></button>
                    </form> 
                    

                    <ul class="navbar-nav  ms-auto mb-2 mb-lg-0 d-flex flex-wrap" style="text-align: center;">
                    
                        <li class="nav-item">
                            <a class="nav-link p-3" href="students_services.php">Estudiantes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-3 " href="enterprises_services.php"> Servicio empresarial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-3" href="about_us.php"> Acerca de</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pt-3 pe-1"  href="#"><i class="fa-solid fa-user fa-xl"></i></i></a>
                        </li>
                    </ul>

                    
                </div>
            </div>
    
        </nav>
    </header>
    
    
    

