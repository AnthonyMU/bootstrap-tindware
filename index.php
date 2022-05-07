<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="estilos/inicio_sesion.css">
    <link rel="stylesheet" type="text/css" href="estilos/index.css">
    <link rel="stylesheet" type="text/css" href="estilos/qs.css">
    <link rel="stylesheet" type="text/css" href="estilos/footer.css">
    <link rel="stylesheet" type="text/css" href="estilos/header.css">

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

   <!--Donde va el inicio de sesion-->
    <section class="text-light p-5 p-lg-3 pt-lg-5 text-center text-sm-start incio">
        <div class="row">
            <div class="col">
                 <div>
                    <div class="text-center lead">
                        <div>
                        <h1>Bienvenido a TindWare</h1>
                            <p class="lead my-5 fs-4">Bienvenido a TindWare, el servicio técnico 24/7, los 365 dias del año.</p>
                        <button id="button" 
                        class="btn btn-dark button" 
                        data-bs-toggle="modal" 
                        data-bs-target="#enroll"
                        >Iniciar sesion
                        </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>
<!--cajones de texto-->
<section class="p-5">
    <div class="container">
        <div class="row text-white">
            <div class="container">
                <div class="row g-3">   
                    <div class="col-md">
                        <div class="card p-3 m-3  icono">
                            <div class="card-body text-center">
                                <h3 class="card-title mb-3"></h3>
                                <p class="lead card-text justificador">Técnicos completamente preparados para el desarrollo, tanto de asistencia 365 como que proyectos que puedan exigir unos conocimientos realmente avanzados o especificos.</p>   
                                <div class="h1 mb-3 ">
                                    <i class="bi bi-wrench p-4"></i>
                                    <i class="bi bi-cpu p-4"></i>
                                    <i class="bi bi-terminal p-4"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card p-3 icono m-3">
                            <div class="card-body text-center">
                                <h3 class="card-title mb-3"></h3>
                                <p class="lead card-text justificador">Nos esforzamos para que tengas persona detras de la pantalla, un técnico que este dispuesto a prestar sus servicios en la hora o el dia o el instante que haga falta, los 365 dias del año.</p>
                                <div class="h1 mb-3 ">
                                    <i class="bi bi-info-circle p-4"></i>
                                    <i class="bi bi-person p-4"></i>
                                    <i class="bi bi-calendar3 p-4"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        
        </div>

    </div>
</section>

<!-- Algo de informacion sobre la empresa-->
<!--Seccion de introduccion a la pagina web. con un padding de 5-->
<section id="learn" class="p-5 mt-5">
    <!--Contenedor resposnive a todos los formatos-->
    <div class="container">
        <div class="row align-items-center justify-content">
            <div class="col-md">
                <img src="img/cerebro.png" class="img-fluid align" width="350">
            </div>
            <div class="col-md  icono">
                <h2 class="text-white">EL servicio que ofrecemos</h2>
               
                <p class="lead text-white card-text justificador">
                    Nos centramos en ofrecer un servicio de calidad, orientado hacia todas las personas. Creemos que es importante que una sociedad tenga conocimientos en informática, ya que un futuro completamente informatizado está a la vuelta de la esquina. Por tanto, estamos plantando la semilla de un futuro sin preocupaciones, en el cuál un simple mensaje de texto o una llamada teléfonica ponga a tu disposicion a los mejores técnicos del mercado.

                    Además queremos ser unfa fuente de oprtunidades para aquellas personas con dificultades para encontrar un empleo pueda tener un oportunidad en este mercado en expansión.   
                </p>
                <a href="qs.html" class="btn-light mt-3">
                    <i class="bi"></i>Saber más sobre nosotros</a>
            </div>
        </div>
    </div>
</section>

<!-- Fundadores de la empresa-->
<!--Esta es la seccion de los fundandores de la empresa-->

<section id="intructors" class="p-5 text-white mb-5">
    <!--clase container para que el bloque adapte el contenido segun resolucion-->
    <div class="container bloque">

        <!-- titulo con un padding de 1-->
        <h3 class="text-center text-white p-1">Nuestro equipo</h3>
        <!-- Introduccion con un padding de 3 y lead para destacar los parrafos-->
        <p class="lead text-center text-white p-3">
            Cada uno de nosotros es fundamental en el desarrollo de la empresa.
        </p>
        <!-- una columna con un padding de altura de 4 entre cajones -->
        <div class="row g-4">
            <!-- Cada col es una fila, en resolucion completa se veran 3 tarjetas-->
            <!-- Solo caben 12 en horizonal. Se divide 12 entre los cajones, hay 6 cajones, no caben todos -->
            <!-- Se colocaran grupos de 3, para ello lg será 4-->
            <!-- En una resolucion inferior a 768px se veran 2 cajones-->
            <!-- En una resolucion inferior a 992px se veran 3 cajones-->
        <div class="col-md-6 col-lg-4">
            <!-- la clase card nos permite crear tarjetas, estas sera con texto blanco-->
            <div class="card text-white">
                <!-- texto centrado-->
                <div class="card-body text-center">
                    <!--la imagen se ha colocado con formato circular y la clase de css <<foto-equipo>>-->
                    <img src="img/imagen.jpg" class="rounded-circle foto-equipo">
                    <!-- Un padding top para separar el titulo de la imagen-->
                    <h3 class="card-title pt-2">
                        Asier Mejuto
                    </h3>
                    <!--Una clase para el texto-->
                    <p class="text-white">Jefe de Seguridad</p>
                      <!--La clase bi permite colocar iconos, en este caso twitter, instagram y linkedin-->
                    <a href="#"><i class="bi bi-twitter text-white mx-1"></i></a> 
                    <a href="#"><i class="bi bi-instagram text-white mx-1"></i></a>
                    <a href="#"><i class="bi bi-linkedin text-white mx-1"></i></a>
                    </i></a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 text-white ">
            <div class="card">
                <div class="card-body text-center">
                    <img src="img/imagen.jpg" class="rounded-circle foto-equipo">
                    <h3 class="card-title pt-2">
                        Ander Herrero
                    </h3>
                    <p class="card-text"> Departamento de Hardware</p>
                    <a href="#"><i class="bi bi-twitter text-white mx-1"></i></a> 
                    <a href="#"><i class="bi bi-instagram text-white mx-1"></i></a>
                    <a href="#"><i class="bi bi-linkedin text-white mx-1"></i></a>
                    </i></a>
                </div>
  
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body text-center">
                    <img src="img/prueba.jpg" class="rounded-circle foto-equipo">
                    <h3 class="card-title pt-2">
                        José Luis Villalba
                    </h3>
                    <p class="card-text">Jefe de sistemas Linux</p>
                    <a href="#"><i class="bi bi-twitter text-white mx-1"></i></a> 
                    <a href="#"><i class="bi bi-instagram text-white mx-1"></i></a>
                    <a href="#"><i class="bi bi-linkedin text-white mx-1"></i></a>
                    </i></a>
                </div>
  
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body text-center">
                    <img src="img/imagen.jpg" class="rounded-circle foto-equipo">
                    <h3 class="card-title pt-2">
                        Alex Crespo
                    </h3>
                    <p class="card-text">RRHH</p>
                    <a href="#"><i class="bi bi-twitter text-white mx-1"></i></a> 
                    <a href="#"><i class="bi bi-instagram text-white mx-1"></i></a>
                    <a href="#"><i class="bi bi-linkedin text-white mx-1"></i></a>
                    </i></a>
                </div>

            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body text-center">
                    <img src="img/adrian.jpg" class="rounded-circle foto-equipo">
                    <h3 class="card-title pt-2">
                        Adrián Martinez
                    </h3>
                    <p class="card-text">Marketing Y relaciones públicas</p>
                    <a href="#"><i class="bi bi-twitter text-white mx-1"></i></a> 
                    <a href="#"><i class="bi bi-instagram text-white mx-1"></i></a>
                    <a href="#"><i class="bi bi-linkedin text-white mx-1"></i></a>
                </div>
  
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body text-center">
                    <img src="img/imagen.jpg" class="rounded-circle foto-equipo">
                    <h3 class="card-title pt-2">
                        Anthony Murriel
                    </h3>
                    <p class="card-text">CEO y Desarrollador Frontend</p>
                    <a href="#"><i class="bi bi-twitter text-white mx-1"></i></a> 
                    <a href="#"><i class="bi bi-instagram text-white mx-1"></i></a>
                    <a href="#"><i class="bi bi-linkedin text-white mx-1"></i></a>
                    </i></a>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>


<!-- footer-->

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



<!-- Aqui tenemos el modal de inicio de sesión-->
<div 
class="modal fade" 
id="enroll" 
tabindex="-1" 
role="dialog" 
aria-labelledby="exampleModalLabel" 
aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content desplegable">
        <div class="modal-body">

           <!--Aqui tenemos el formulario de inicio de sesion -->
           <form action="">
            <div class="form-group text-center">
                 <h4 class="text-white">Iniciar sesion</h4>
                 <div id="centrador">
                    <img src="img/login.png" class="rounded-circle img">  
                    </div>
            </div>
            <div class="form-group mx-sm-4  pb-3">
                <input type="text" class="form-control" placeholder="usuario">
            </div>
            <div class="form-group mx-sm-4 pb-3">
                <input type="password" class="form-control" placeholder="contraseña">
            </div>
            <div class="form-group mx-sm-4 pb-4">
                <input type="submit" class="btn btn-block ingresar" value="ingresar">
            </div>
            </form>
        </div>
     
      </div>
    </div>
  </div>
  
</body>
</html>