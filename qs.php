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
          <img src="img/10.jpg" class="d-block imgg img-responsive" alt="...">
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
  
  <footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Links de utilidad</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="index.html">Inicio</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="qs.html">Quienes somos</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="iniciosesion.html">Iniciar sesion</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="registro.html">Registrarse</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Politica de privacidad</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-4 col-md-6 footer-contact">
                    <h4>Contactanos</h4>
                    <p> Autonomia Kalea, 62, 48012  <br> 
                        Bilbao, Bizkaia<br> 
                        España <br><br> 
                        <strong>Teléfono:</strong> +34 667 36 59 58<br> 
                        <strong>Email:</strong> tinddware@gmail.com<br> </p>
                </div>
                <div class="col-lg-4 col-md-6 footer-info">
                    <h3>SOBRE TINDWARE</h3>
                    <p>Empresa dedicada al mantenimiento informático y la creación de proyectos.</p>
                    <div class="social-links mt-3"> 
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a> 
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a> 
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> 
                    </div>
                </div>
                <div class="col-lg-12 text-white text-center position-relative">
                    <p class="lead">Copyright &copy; 2022 Tindware</p>  
                </div>
         
                </div>
               
            </div>
        </div>
    </div>
   
</footer>



</body>
</html>