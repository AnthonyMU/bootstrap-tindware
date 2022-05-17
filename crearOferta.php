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
            <div class="col-auto text-center w-100 mt-5 mb-5">
               <form action="do_crearoferta.php" method="POST">
                    <!-- Formulario creación oferta -->
             
                    <input type="text" class="w-50 m-1" name="titulo" placeholder="Introduce un título para la oferta..." required/>
             
                    <textarea type="text" name="descripcion"  class="w-50 m-1" placeholder="Describe tu oferta..."></textarea>

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
