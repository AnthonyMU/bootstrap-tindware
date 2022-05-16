<!DOCTYPE html>
<head>
    <title>Iniciar sesión - Tindware</title>
</head>
<body>
<?php
    # Cargar constantes
    include 'inc/constantes.php';
    # Cargamos cookies
    include 'inc/obtenerCookies.php';
    # Incluir header
    include 'inc/header.php';
?> 
<?php
    if ($id_user != 0) {
        echo HIDE;
    }
?>
<div class="container">
    <div class="row justify-content-center pt-5 mt-5">
        <div class="col-md-6 col-sm-8 col-xl-6 col-lg-5 formulario">
            <form action="do_login.php" method="POST">
                <div class="form-group text-center">
                    <h4 class="text-white">Inicio de sesión</h4>
                    <div id="centrador">
                        <img src="img/login2.png" class="rounded-circle img">  
                    </div>
                </div>
                <div class="form-group mx-sm-4 pb-3">
                    <input name="login" type="text" class="form-control" placeholder="Usuario o email">
                </div>
                <div class="form-group mx-sm-4 pb-3">
                    <input name="passwd" type="password" class="form-control" placeholder="Contraseña">
                </div>
                <div class="form-group mx-sm-4 pb-4">
                    <input type="submit" class="btn btn-block ingresar" value="Iniciar sesión">
                </div>
                <div class="form-group mx-sm-4 pb-3 text-center">
                    <a href="registro.php" class="text-warning">¿No tienes una cuenta?</a>
                </div>
            </form>  
        </div>   
    </div>
</div>
<?php
if ($id_user != 0) {
    echo HIDECLOSE;
}
if ($id_user == 0) {
    echo HIDE;
}
?>
<div class="container">
    <div class="row justify-content-center pt-5 mt-5">
        <p>Ya has iniciado sesión!</p>
        <a href="index.php" class="btn btn-block ingresar">Volver al inicio</a>
    </div>
</div>
<?php
if ($id_user == 0) {
    echo HIDECLOSE;
}
?>

<!-- Footer -->

<?php
include 'inc/footer.php';
?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>