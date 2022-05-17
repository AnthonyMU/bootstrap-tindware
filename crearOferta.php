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
            <div class="col">
               <form action="do_crearoferta.php" method="POST">
                    <!-- Formulario creación oferta -->
                <h3>Titulo</h3>
                    <input type="text" name="titulo" required/>
                <h3>Descripción</h3>
                    <textarea type="text" name="descripcion" required cols="50" rows="10" placeholder="Rellena este campo"></textarea>  <!-- Cols y rows para que se vea bien en el navegador -->
                    <input type="submit" value="Crear"/>   
            </form>  
            </div>
        </div>
    </div>
  
<?php
include 'inc/footer.php';
?>
</body>
</html>
