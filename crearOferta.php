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
    <div class="container coferta">
        <div class="row justify-content-center">
            <div class="col-auto text-center w-100 mt-5 mb-5 coferta">
            <form action="do_crearoferta.php" method="POST">
                <!-- Formulario creación oferta -->
             <input type="text" class="form-control coferta" name="titulo" placeholder="Introduce un título para la oferta..." required="">
             <textarea type="text" class="form-control coferta" name="descripcion" placeholder="Describe tu oferta..."></textarea>
            <div class="col-12">
                <input type="submit" class="btn btn-block binput2" value="Crear oferta"> 
            </div>
            <div class="col-12">
                <input type="button" class="binput2" onclick="location.href='ofertas_part.php'" value="Volver atrás">
            </div>
            </div>
        </div>
    </div>
  
<?php
include 'inc/footer.php';
?>
</body>
</html>
