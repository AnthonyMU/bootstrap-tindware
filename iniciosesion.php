<!DOCTYPE html>
<head>
    <title>Iniciar sesión - Tindware</title>
</head>
<body>
<?php
    # Cargar constantes
    include 'inc/constantes.php';
    echo HIDE;
    echo "<p>Deberia estar hidden</p>"
    echo HIDECLOSE;
    # Cargamos cookies
    include 'inc/obtenerCookies.php';
    # Incluir header
    include 'inc/header.php';
?> 

   <div class="container">
    <div class="row justify-content-center pt-5 mt-5">
        <div class="col-md-6 col-sm-8 col-xl-6 col-lg-5 formulario">
            <form action="">
            <div class="form-group text-center">
                 <h4 class="text-white">Iniciar sesion</h4>
                 <div id="centrador">
                    <img src="img/login2.png" class="rounded-circle img">  
                </div>
            </div>
            <div class="form-group mx-sm-4 pb-3">
                <input type="text" class="form-control" placeholder="Usuario">
            </div>
            <div class="form-group mx-sm-4 pb-3">
                <input type="password" class="form-control" placeholder="Contraseña">
            </div>
            <div class="form-group mx-sm-4 pb-4">
                <input type="submit" class="btn btn-block ingresar" value="ingresar">
            </div>
            <div class="form-group mx-sm-4 pb-3 text-center">
                <a href="registro.html" class="text-warning">¿No tienes una cuenta?</a>
            </div>
            </form>  
        </div>   
    </div>
</div>

<!-- Footer -->

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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>