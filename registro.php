<!DOCTYPE html>
<head>
    <title>Registro - Tindware</title>
    <script src="scripts/jquery-3.6.0.min.js"></script>
    <script src="scripts/loc.js"></script>
    <script src="scripts/registro.js"></script>
</head>
<body>
<?php
    # Cargar constantes
    include 'inc/constantes.php';
    # Cargamos cookies
    include 'inc/obtenerCookies.php';
    # Incluir header
    include 'inc/header.php';
    
    # Hidear registro si esta logueado
    if ($id_user != 0) {
        echo HIDE;
    }
?> 

   <div class="container">
    <div class="row justify-content-center pt-5 mt-5 text-white">
        <div class="col-md-6 col-sm-8 col-lg-6 col-lg-5 formulario">
            <form action="do_registro.php" method="POST">
                    <div class="form-group text-center">
                        <h4>Registro de usuario</h4>
                        <div id="centrador">
                            <img src="img/registro.png" class="rounded-circle img">
                        </div>
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input name="username" type="text" class="form-control" placeholder="Nombre de usuario" required>
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input name="passwd" type="password" class="form-control" placeholder="Contraseña" required>
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input name="email" type="email" class="form-control" placeholder="Correo electrónico" required>
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <h5 style="text-align: center;">Tipo de usuario</h5>
                        <select class="form-control" name="tipo" required>
                            <option value="particular" class="select">Particular</option>
                            <option value="tecnico" class="select">Tecnico</option>
                        </select>
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <h5 style="text-align: center;">Fecha de nacimiento</h5>
                        <input name="fechanac" type="date" class="form-control" placeholder="Fecha de nacimiento" required>
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="text" class="form-control" id="geocoding_input" placeholder="Escriba su dirección..."/> 
                        <button type="button" onclick="coordenadasDesdeGeocoding();">Asignar coordenadas</button><br/>
                        <input>Latitud: <input type="text" size="5" onkeydown="return false;" style="pointer-events: none;" id="lat" name="lat" required value=""/></input> 
                        <input>Longitud: <input type="text" size="5" onkeydown="return false;" style="pointer-events: none;" name="lon" id="lon" required value=""/></input>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="submit" class="btn btn-block ingresar" value="Registrarse">
                    </div>
                    <div class="form-group mx-sm-4 pb-3 text-center">
                        <a href="iniciosesion.php" class="text-warning">¿Ya tienes una cuenta?</a>
                    </div>
            </form>
        </div>
    </div>
   </div>

<?php
if ($id_user != 0) {
    echo HIDECLOSE;
}
# Si esta ya logeado ponemos error
if ($id_user == 0) {
    echo HIDE;
}
?>
<p>Ya logeado</p>

<?php
if ($id_user == 0) {
    echo HIDECLOSE;
}


include 'inc/footer.php';
?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>