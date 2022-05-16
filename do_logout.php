<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cerrar Sesión - Tindware</title>
</head>
<body>
    <?php
    include 'inc/constantes.php';
    @include "inc/obtenerDatosUser.php";
    setcookie("id_user", 0, 0, "/");
    setcookie("type_user", "invitado", 0, "/");
    include 'inc/header.php';
    ?>

    <?php
    # Si el usuario no ha iniciado sesión escondemos el div de success
    if ($type_user == 'invitado') {
         echo HIDE;
     }
    ?>
    <div id="dologout_success">
        
        <h5 class="volver">¡Hasta pronto <?php echo $datosUser['username'] ?>!<h5>Has cerrado sesión correctamente. </h5><h5><a href="index.php" class="volver">Volver al inicio</a></h5></h5>
    </div>
    <?php
    # Si el usuario no ha introducido los datos correctos escondemos el div de success
    if ($type_user == 'invitado') {
         echo HIDECLOSE;
     }
    ?>

    <?php
    # Si el usuario ha cerrado sesión correctamente escondemos el div de error
    if ($type_user != 'invitado') {
         echo HIDE;
     }
    ?>
    <div id="dologout_error">
        <h5>¡Todavía no has iniciado sesión! <a href="iniciosesion.php" class="volver text-warning">Inicia sesión</a> o <a href="index.php" class="volver text-warning">vuelve al inicio</a>.</h5>
        <!-- Error cuando ya has iniciado sesión -->
    </div>
    <?php
    # Si el usuario ha cerrado sesión correctamente escondemos el div de error
    if ($type_user != 'invitado') {
         echo HIDECLOSE;
     }
    ?>



<?php
include 'inc/footer.php';
?>


</body>
</html>
