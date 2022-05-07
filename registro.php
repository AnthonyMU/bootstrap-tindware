<!DOCTYPE html>
<head>
    <title>Registro - Tindware</title>
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
    <div class="row justify-content-center pt-5 mt-5 text-white">
        <div class="col-md-6 col-sm-8 col-lg-6 col-lg-5 formulario">
            <form action="" method="">
                    <div class="form-group text-center">
                        <h4>Registro de usuario</h4>
                        <div id="centrador">
                            <img src="img/registro.png" class="rounded-circle img">
                        </div>
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="text" class="form-control" placeholder="Nombre de usuario">
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="password" class="form-control" placeholder="Contraseña">
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="email" class="form-control" placeholder="Correo electrónico">
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <select class="form-control">
                            <option value="particular" class="select">Particular</option>
                            <option value="tecnico" class="select">Tecnico</option>
                        </select>
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="date" class="form-control" placeholder="Fecha de nacimiento">
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="submit" class="btn btn-block ingresar" value="Registrarse">
                    </div>
                    <div class="form-group mx-sm-4 pb-3 text-center">
                        <a href="iniciosesion.html" class="text-warning">¿Ya tienes una cuenta?</a>
                    </div>
            </form>
        </div>
    </div>
   </div>

   <!--Footer-->

   <footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Links de utilidad</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Quines somos</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Iniciar sesion</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Registrarse</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Politica de privacidad</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-4 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p> A108 Adam Street <br> New York, NY 535022<br> United States <br><br> <strong>Phone:</strong> +1 5589 55488 55<br> <strong>Email:</strong> info@example.com<br> </p>
                </div>
                <div class="col-lg-4 col-md-6 footer-info">
                    <h3>Sobre TindWare</h3>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                    <div class="social-links mt-3"> 
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a> 
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a> 
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> 
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>