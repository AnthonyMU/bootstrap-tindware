<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crear Oferta - Tindware</title>
</head>
<body>
    <?php
    # Cargar constantes
    include 'inc/constantes.php';
    # Cargamos cookies
    include 'inc/obtenerCookies.php';
    # Incluir header
    include 'inc/header.php';

    # Recogemos datos del POST
    @$titulo = $_POST['titulo'];
    @$descripcion = $_POST['descripcion'];

    $registroCorrecto = false;
    # Funcion para marcar como error mas sencillamente
    function errorReg($mensaje) {
        $GLOBALS['registroError'] = false;
        $GLOBALS['mensajeError'] = $mensaje;
    }

    # Comprobamos que esta el titulo
    if (@!empty($titulo) AND @!empty($descripcion)) {
        # Comprobamos que el usuario sea un particular
        if ($type_user = 'particular') {
            # Comprobamos si existe una misma oferta del usuario con los mismos datos
            # Conexion a la base de datos y query
            $con = mysqli_connect('localhost', 'root', MYSQL_PASSWD);
            $queryExiste = "SELECT * FROM tindware.ofertas WHERE titulo = '$titulo' AND descripcion = '$descripcion' AND id_usuariopart = $id_user AND fechafinalizacion IS NULL;";
            $outExiste = mysqli_query($con, $queryExiste);

            if (mysqli_num_rows($outExiste) == 0) {
                # Continuamos con la creacion de la oferta

                $queryInsert = "INSERT INTO tindware.ofertas (titulo, descripcion, id_usuariopart, fechacreacion) VALUES ('$titulo', '$descripcion', $id_user, CURRENT_TIMESTAMP());";
                mysqli_query($con, $queryInsert);

                # Ahora comprobamos si existe el registro que acabamos de crear
                $queryCreado = "SELECT * FROM tindware.ofertas WHERE titulo = '$titulo' AND descripcion = '$descripcion' AND id_usuariopart = $id_user AND fechafinalizacion IS NULL;";
                $outCreado = mysqli_query($con, $queryCreado);
                if (mysqli_num_rows($outCreado) == 1) {
                    $GLOBALS['registroCorrecto'] = true;
                    $GLOBALS['id_oferta'] = mysqli_fetch_array($outCreado)['id'];
                }
                else {
                    errorReg('Se ha encontrado un error al crear la oferta. Cont??cte con el administrador de la p??gina');
                }
            }
            else {
                $id_oferta = mysqli_fetch_array($outExiste)['id'];
                errorReg("
                <div id='docrearoferta_error' class='container error text-white'>
    
                    <div class='row justify-content-center mt-4 mb-4'>
                        <div class='col-auto'>
                            <div class='row justify-content-center' style='background: rgba(0, 0, 0,0.5); border: 1px solid #212529; border-radius: 0.25rem;'>
                                <p>Error: Ya existe una oferta pendiente con estos datos DEBUG: ID OFERTA = $id_oferta</p>
                                <p class='text-center'>??Qu?? deseas hacer a continuaci??n?</p>
                            </div>
                            <div>
                                <input type='button' class='btn btn-block ingresar mt-4' onclick='location.href=\"crearOferta.php\"' value='Nueva'>
                                <input type='button' class='btn btn-block ingresar mt-4' onclick='location.href=\"index.php\"' value='Inicio'>
                            </div>
                        </div>
                    </div>
                </div>");
            }
        }
        else {
            errorReg('Debes ser un usuario particular para crear una oferta');
        }
    }
    else {
        errorReg('No se han rellenado todos los campos');
    }
    ?>
    <div id="main">
        <?php
        if ($registroCorrecto) {
            echo HIDE;
        }
        ?>
        <div id="docrearoferta_error" class="container error">
            <span>Error: <?php echo $mensajeError?></span>
        </div>
        <?php
        if ($registroCorrecto) {
            echo HIDECLOSE;
        }
        if (!$registroCorrecto) {
            echo HIDE;
        }
        ?>
        <div id="docrearoferta_success" class="container lead text-white">
            <div class="row justify-content-center mt-4 mb-4">
                 <div class="col-auto">
                    <p>Se ha creado su oferta satisfactoriamente, ??pronto un t??cnico se pondr?? en contacto con usted!</p>
                    <p class="text-center">??Qu?? deseas hacer a continuaci??n?</p>
                     <input type="button" class="binput2 mt-3" onclick="location.href='crearOferta.php'" value="Nueva">
                     <?php echo "<input type='button' class='binput2 mt-3' onclick=location.href='viewOferta.php?id=$id_oferta' value='M??s informaci??n'>";?>
                     <input type="button" class="binput2 mt-3" onclick="location.href='index.php'" value="Inicio">
                </div>
            </div>
        </div>
        <?php
        if (!$registroCorrecto) {
            echo HIDECLOSE;
        }
        ?>
    </div>
    <?php
    include 'inc/footer.php';
    ?>
</body>
</html>
