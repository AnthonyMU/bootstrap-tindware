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
        
        <p class="bienvenido">¡Hasta pronto <?php echo $datosUser['username'] ?>!<p>Has cerrado sesión correctamente. </p><p><a href="index.php" class="volver">Volver al inicio</a></p></p>
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
        <p class="bienvenido">¡Todavía no has iniciado sesión! <a href="iniciosesion.php" class="volver">Inicia sesión</a> o <a href="index.php" class="volver">vuelve al inicio</a>.</p>
        <!-- Error cuando ya has iniciado sesión -->
    </div>
    <?php
    # Si el usuario ha cerrado sesión correctamente escondemos el div de error
    if ($type_user != 'invitado') {
         echo HIDECLOSE;
     }
    ?>

</body>
</html>
