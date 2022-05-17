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
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto text-center w-100">
               <form action="do_crearoferta.php" method="POST">
                    <!-- Formulario creación oferta -->
                <h3>Titulo</h3>
                    <input type="text" class="w-50" name="titulo" required/>
                <h3>Descripción</h3>
                    <textarea type="text" name="descripcion"  class="w-50" placeholder="Rellena este campo"></textarea>
                     
                    <input type="submit" class="btn btn-block ingresar" value="Crear oferta"> 
            </form>  
            </div>
        </div>
    </div>
  
<?php
include 'inc/footer.php';
?>
</body>
</html>
