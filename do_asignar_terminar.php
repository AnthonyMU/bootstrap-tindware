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
        echo "<div class='container text-white text-align'>
            <a href='ofertas_tec.php' class='xd'>Oferta asignada con éxito</a>
        </div>";
    }
    elseif ($accion == 'terminar') { 
        # Vamos a dar por finalizada la oferta
        $query = "UPDATE tindware.ofertas SET fechafinalizacion = CURRENT_TIMESTAMP() WHERE id = $oferta_id;";
        mysqli_query($con, $query);
        echo "<a href='ofertas_tec.php' class='xd'>Has cubierto el servicio técnico de forma satisfactoria</a>";
    }
    else {
        echo "<a href='ofertas_tec.php' class='xd'>Error desconocido</a>";
    }

    mysqli_close($con);
    include 'inc/footer.php';
?>