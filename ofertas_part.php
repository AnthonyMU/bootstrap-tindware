<!DOCTYPE html>
<html lang="en">
<head>
    <script src="scripts/jquery-3.6.0.min.js"></script>
    <script src="scripts/ofertas_part.js"></script>
    <link rel="stylesheet" href="estilos/ofertas.css" type="text/css"/>
    <title>Mis ofertas - Tindware</title>
</head>
<body>
    <?php
    # Cargar constantes
    include 'inc/constantes.php';
    # Cargamos cookies
    include 'inc/obtenerCookies.php';
    # Header
    include 'inc/header.php';
    if ($type_user == 'particular' or $type_user == 'admin') {
        $permitido = true;
    }
    else {
        $permitido = false;
    }
    ?>

    <?php
    if (!$permitido) {
        echo HIDE;
    }?>
    <div id="main">
        <?php
        function outVacio($out) {
            if (mysqli_num_rows($out) == 0) {
                return true;
            }
            else {
                return false;
            }
        }

        if ($permitido) {
            $con = mysqli_connect('localhost', 'root', MYSQL_PASSWD);
            
            $queryOfertasNuevas = "SELECT * FROM tindware.ofertas WHERE id_usuariopart = $id_user AND id_usuariotec IS NULL;";
            $queryOfertasEnProceso = "SELECT * FROM tindware.ofertas WHERE id_usuariopart IS = $id_user AND id_usuariotec IS NOT NULL and fechafinalizacion IS NULL;";
            $queryOfertasTerminadas = "SELECT * FROM tindware.ofertas WHERE id_usuariopart = $id_user AND fechafinalizacion IS NOT NULL;";

            $outNuevas = mysqli_query($con, $queryOfertasNuevas);
            $outEnProceso = mysqli_query($con, $queryOfertasEnProceso);
            $outTerminadas = mysqli_query($con, $queryOfertasTerminadas);

            $nuevasVacio = outVacio($outNuevas);
            $enProcesoVacio = outVacio($outEnProceso);
            $terminadasVacio = outVacio($outTerminadas);

            function mostrarOfertas($out, $con, $clickable, $tipo) {
                while ($resultadoOfertas = mysqli_fetch_array($out)) {
                    $id_usuariopart = $resultadoOfertas['id_usuariopart'];
                    $queryUbi = "SELECT lat, lon FROM tindware.usuario WHERE id = $id_usuariopart;";
                    $outTemp = mysqli_query($con, $queryUbi);
                    $resultadoTemp = mysqli_fetch_array($outTemp);
                    $lat = $resultadoTemp['lat'];
                    $lon = $resultadoTemp['lon'];
        
                    $id_oferta = $resultadoOfertas['id'];
                    $titulo = $resultadoOfertas['titulo'];
                    $descripcion = $resultadoOfertas['descripcion'];
                    if ($tipo == 'disponible') {
                        $miOnclick = "location.href='do_asignar_terminar.php?id=$id_oferta&accion=asignar';";
                    }
                    else {
                        $miOnclick = "location.href='do_asignar_terminar.php?id=$id_oferta&accion=terminar';";
                    }
                    echo "<div class='lead p-3 oferta'>
                    <div class='row justify-content-center'>
                    <div class='col-auto-12'>
                    <div class='card ml-5 text-center bg-transparent border-0 col-md-12'>
                    <div class='card-body cards'>";
                    echo "<h5 class='card-title tituloOferta'>$titulo</h5>";
                    echo "<p class='card-text'>$descripcion</p><br/>";
                    if ($tipo = 'disponible') {
                        echo "<input type='button' class='binput' onclick=location.href='viewOferta.php?id=$id_oferta' value='Más información'>";
                    }
                    #echo "<form method='post' action='do_asignar_terminar.php'><input type='submit' value='";
                    #if (!$clickable) {echo " disbaled";}
                    #if (!$clickable) {echo "style='pointer-events: none;cursor: default;'";}
                    if ($tipo == 'disponible') {
                      
                    }
                    else {
                        echo " value='Terminar'";
                    }
                    if (!$clickable) { echo " disabled"; }
                    echo "</input>";
                    echo "<span class='ubicacion'><img src='img/place.png'/> $lat, $lon</span>";
                    echo "</div></div></div></div></div>";
                }
            }


        }?>
        <div class="container lead">
            <div class="row">
                <div id="menuBotones" class="col">
                    <h1 class="lead text-white text-center">Seleccione filtro</h1>
                        <table>
                            <tr>
                            <td><a class="botonOfertas" class="crearOferta" href="crearOferta.php">Crea una nueva incidencia</a></td>
                            <td><a class="botonOfertas" id="botoNuevas" href="#" onclick="showNuevas();">Incidencias sin asignar</a></td>
                            <td><a class="botonOfertas" id="botonEnProceso" href="#" onclick="showEnProceso();">Incidencias en proceso</a></td>
                            <td><a class="botonOfertas" id="botonHistorial" href="#" onclick="showTerminadas();">Historial de incidencias</a></td>
                            </tr>
                        </table>
                </div>
                <div id="ofertas" class="container lead">
            <div class="container ensenarOferta" id="ofertasNuevas">
                <?php
                if ($nuevasVacio) {
                    echo HIDE;
                }

                mostrarOfertas($outNuevas, $con, true, "pendiente");

                if ($nuevasVacio) {
                    echo HIDECLOSE;
                }

                if (!$nuevasVacio) {
                    echo HIDE;
                }?>
                No tienes ninguna incidencia
                <?php
                if (!$nuevasVacio) {
                    echo HIDECLOSE;
                }?>
            </div>

            <div class="container ensenarOferta" id="ofertasEnProceso">
                <?php
                if ($enProcesoVacio) {
                    echo HIDE;
                }

                mostrarOfertas($outEnProceso, $con, true, "disponible");

                if ($enProcesoVacio) {
                    echo HIDECLOSE;
                }
                
                if (!$enProcesoVacio) {
                    echo HIDE;
                }?>
                No tienes ninguna incidencia en proceso
                <?php
                if (!$enProcesoVacio) {
                    echo HIDECLOSE;
                }?>
            </div>

            <div class="container ensenarOferta" id="ofertasTerminadas">
                <?php
                if ($terminadasVacio) {
                    echo HIDE;
                }
                
                mostrarOfertas($outTerminadas, $con, false, "");

                if ($terminadasVacio) {
                    echo HIDECLOSE;
                }

                if (!$terminadasVacio) {
                    echo HIDE;
                }?>
                No se ha terminado ninguna incidencia
                <?php
                if (!$terminadasVacio) {
                    echo HIDECLOSE;
                }?>
             </div>
        </div>    
            </div>
        </div>






    <?php
    if (!$permitido) {
        echo HIDECLOSE;
    }
    if ($permitido) {
        echo HIDE;
    }?>
        <span class="nopermitido">Acceso denegado: debe iniciar sesión</span>
    </div>
    <?php
    if ($permitido) {
        echo HIDECLOSE;
    }
    mysqli_close($con);
    include 'inc/footer.php';
    ?>
</body>
</html>