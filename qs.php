<!DOCTYPE html>
<head>
    <title>Quienes Somos - Tindware</title>
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

    <!--slider -->

    <div id="carrusel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carrusel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carrusel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carrusel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner container-fluid">
        <div class="carousel-item active">
          <img src="img/Hola.png" class="d-block imgg img-responsive" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/2.jpg" class="d-block imgg img-responsive" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/8.jpg" class="d-block imgg img-responsive" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carrusel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carrusel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      
  </div>
  <!--Aqui va el footer-->
  
<?php
include 'inc/footer.php';
?>




</body>
</html>