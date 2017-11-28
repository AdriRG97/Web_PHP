<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <link rel="icon" href="favicon.ico">
    <link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/estilos.css" type="text/css" rel="stylesheet">

    <title>Solid.</title>
</head>
<body class="pt-6">
<header class="fixed-top bg-dark">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"><a class="navbar-brand ml-5" id="titulo"
                                                                    href="../../../index.php">Solid.</a>
            <?php echo "<span class='badge badge-success ml-auto mr-auto'> Sesión iniciada: " . $_SESSION['user'] . "</span>" ?>
            <div class="ml-auto mr-5">
                <div class="collapse navbar-collapse float-left" id="menu">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="../../../index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="quienes_somos.html">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="como_funciona.html">Productos</a></li>
                        <li class="nav-item"><a class="nav-link" href="objetivos.html">Información</a></li>
                        <li class="nav-item"><a class="nav-link" href="/app/views/public/contact.php">Contacto</a></li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown"
                                                         href="#" role="button" aria-haspopup="true"
                                                         aria-expanded="false">Social</a>
                            <div class="dropdown-menu bg-dark">
                                <a class="dropdown-item" href="/app/views/private/user/profile.php">Perfil</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/app/views/public/user/logout.php">Salir</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#menu"
                        aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
            </div>
        </nav>
    </div>
</header>