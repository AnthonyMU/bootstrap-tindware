<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ofertas - Tindware</title>
</head>
<body>
    
</body>
</html>

<?php


    # Cargar constantes
    include 'inc/constantes.php';
    # Cargamos cookies
    include 'inc/obtenerCookies.php';
    # Header
    include 'inc/header.php';

    $accion = $_GET['accion'];
    $oferta_id = $_GET['id'];
    $con = mysqli_connect('localhost', 'root', MYSQL_PASSWD);

    if ($accion == 'asignar') {
        # Vamos a asignar la oferta al usuario logeado
        $query = "UPDATE tindware.ofertas SET fechaasignado = CURRENT_TIMESTAMP() WHERE id = $oferta_id;";
        mysqli_query($con, $query);
        $query = "UPDATE tindware.ofertas SET id_usuariotec = $id_user WHERE id = $oferta_id;";
        mysqli_query($con, $query);
        echo "<div class='container lead aoferta'>
                <div class='row justify-content-center'>
                    <div class='col-auto easignada'>
                        <a href='ofertas_tec.php'>Oferta asignanda con exito</a>
                    </div>
                </div>
            </div>";
    }
    elseif ($accion == 'terminar') { 
        # Vamos a dar por finalizada la oferta
        $query = "UPDATE tindware.ofertas SET fechafinalizacion = CURRENT_TIMESTAMP() WHERE id = $oferta_id;";
        mysqli_query($con, $query);
        echo "<div class='container lead aoferta'>
        <div class='row justify-content-center'>
            <div class='col-auto easignada'>
                <a href='ofertas_tec.php'>Has cubierto la oferta de manera satisfactoria</a>
            </div>
        </div>
    </div>";
    }
    else {
        echo "<div class='container lead aoferta'>
        <div class='row justify-content-center'>
            <div class='col-auto easignada'>
                <a href='ofertas_tec.php'>¡Vaya! Se ha producido un error inesperado</a>
            </div>
        </div>
    </div>";
    }

    mysqli_close($con);
    include 'inc/footer.php';
?>