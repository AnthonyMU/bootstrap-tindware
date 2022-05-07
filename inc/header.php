<!DOCTYPE html>
<?php
    @include "constantes.php";
    @include "obtenerCookies.php";
    if (@!function_exists('obtenerDatosUser')) {
        @include "obtenerDatosUser.php";
    }
    $datosUser = obtenerDatosUser($id_user);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="estilos/inicio_sesion.css">
    <link rel="stylesheet" type="text/css" href="estilos/index.css">
    <link rel="stylesheet" type="text/css" href="estilos/qs.css">
    <link rel="stylesheet" type="text/css" href="estilos/footer.css">
    <link rel="stylesheet" type="text/css" href="estilos/header.css">
</head>
<body>
 <nav class="nav.navbar navbar-expand-lg  navbar-dark py-3 fixed-top menu">
        <div class="container">
            <button 
            class="navbar-toggler" 
            type="buttom" 
            data-bs-toggle="collapse" 
            data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
        <!-- Aqui la barra de navegacion-->
        <div class="collapse navbar-collapse" id="navmenu">
            <a href="index.php" class="navbar-brand fs-1">TindWare</a>
            <ul class="navbar-nav ms-auto lead">
                <li class="nav-item">
                    <a href="qs.php" class="nav-link text-white">Quienes somos</a>
                </li>
                <li class="nav-item">
                    <a href="FAQ.php" class="nav-link text-white">FAQ</a>
                </li>
                <?php
                # Si no es guest quitamos el boton de iniciar sesión o registro
                if ($id_user != 0) {
                    echo HIDE;
                }
                ?>
                <li class="nav-item">
                    <a href="iniciosesion.php" class="nav-link text-white">Iniciar sesión</a>
                </li>
                <li class="nav-item">
                    <a href="registro.php" class="nav-link  text-white">Registro</a>
                </li>
                <?php
                if ($id_user != 0) {
                    echo HIDECLOSE;
                }
                
                # Si es guest no mostramos el boton de cerrar sesión
                if ($id_user == 0) {
                    echo HIDE;
                }
                ?>
                <li class="nav-item">
                    <a href="perfil.php" class"nav-link text-white">Perfil de <?php echo @$datosUser['username'] ?>.</a>
                </li>
                <li class="nav-item">
                    <a href="do_logout.php" class="nav-link text-white">Cerrar sesión</a>
                </li>
                <?php
                if ($id_user == 0) {
                    echo HIDECLOSE;
                }
                ?>
            </ul>
        </div>
        </div>
   </nav>
</body>