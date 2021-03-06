<!DOCTYPE html>
<head>
    <title>FAQ - Tindware</title>
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


<!--FAQ-->
<section>  
<div class="accordion accordion-flush py-4 p-5 lead" id="accordionFlushExample">
    <h2 class="text-center text-white py-4 ">Preguntas más frecuentes</h2>
    <div class="accordion-item faq text-white text-center">
      <h2 class="accordion-header faq text-center" id="flush-headingOne">
        <button class="accordion-button collapsed faq alinear lead" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne faq">
          ¿Puedo elegir al técnico que va a solventar mi problema?
        </button>
      </h2>
      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body rev">No, el técnico es el que elegirá qué incidencia solventar.
        </div>
      </div>
    </div>
    <div class="accordion-item faq text-white">
      <h2 class="accordion-header" id="flush-headingTwo">
        <button class="accordion-button collapsed faq alinear" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
          ¿Cuántas incidencias puedo tener en mi perfil al mismo tiempo?
        </button>
      </h2>
      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body faq rev">Tantas como quieras.  </div>
      </div>
    </div>
    <div class="accordion-item faq text-white">
      <h2 class="accordion-header" id="flush-headingThree">
        <button class="accordion-button collapsed faq alinear" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        ¿Hay alguna forma de saber cuando me han solucionado mi problema?
        </button>
      </h2>
      <div id="flush-collapseThree" class="accordion-collapse collapse faq" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body faq rev">Se te notificará en Tindware cuando el técnico de por finalizada la sesión.</div>
      </div>
      
    </div>
    <div class="accordion-item faq text-white">
        <h2 class="accordion-header" id="flush-headingFour">
          <button class="accordion-button collapsed faq alinear" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">          
          ¿Hay algún día o alguna fecha en la que el servicio no esté disponible?
          </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body faq rev">No, el servicio que ofrece Tindware es completo los 365 días del año, lo que podría ocurrir es que haya menos técnicos disponibles en ciertas fechas y por ello algún retraso, pero siempre habrá alguien para solucionar las incidencias en todo momento.</div>
        </div>
        
      </div>
      <div class="accordion-item faq">
        <h2 class="accordion-header" id="flush-headingFive">
          <button class="accordion-button collapsed faq alinear" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
            ¿Puedo acceder a la web en cualquier dispositivo?
          </button>
        </h2>
        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body faq rev">Si, la web estará disponible tanto en ordenadores como en smartphones IOS y Android.
          </div>
        </div>
        
      </div>
      <div class="accordion-item faq">
        <h2 class="accordion-header" id="flush-headingSix">
          <button class="accordion-button collapsed faq alinear" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
            ¿Existe algún correo de contacto en caso de tener algún problema con la página o con algún servicio?
          </button>
        </h2>
        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body faq rev">Si, tenemos a disposición de todos el correo electrónico tinddware@gmail.com  para recibir quejas o sugerencias.</div>
        </div>
        
      </div>
      <div class="accordion-item faq">
        <h2 class="accordion-header" id="flush-headingsiete">
          <button class="accordion-button collapsed faq alinear" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsesiete" aria-expanded="false" aria-controls="flush-collapsesiete">
            ¿Cuál es el tiempo de respuesta esperado?
          </button>
        </h2>
        <div id="flush-collapsesiete" class="accordion-collapse collapse" aria-labelledby="flush-headingsiete" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body faq rev">El tiempo puede variar en función de la dificultad de la incidencia, pero dada la cantidad de técnicos disponibles, no se tardará más de 10-15 minutos en intervenir.</div>
        </div>
    
      </div>
      <div class="accordion-item faq">
        <h2 class="accordion-header" id="flush-headingocho">
          <button class="accordion-button collapsed faq alinear" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseocho" aria-expanded="false" aria-controls="flush-collapseocho">
            ¿Se me garantiza una solución? 
          </button>
        </h2>
        <div id="flush-collapseocho" class="accordion-collapse collapse" aria-labelledby="flush-headingocho" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body faq rev">Aunque nuestros profesionales de soporte técnico harán los mejores esfuerzos para resolver tu problema, Tindware no puede garantizar resolver todos los problemas, debido a la diversidad de las configuraciones informáticas de nuestros clientes. </div>
        </div>
        
      </div>
      <div class="accordion-item faq">
        <h2 class="accordion-header" id="flush-headingnine">
          <button class="accordion-button collapsed faq alinear" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsenine" aria-expanded="false" aria-controls="flush-collapsenine">
            ¿Cuando expiran las incidencias?
          </button>
        </h2>
        <div id="flush-collapsenine" class="accordion-collapse collapse" aria-labelledby="flush-headingnine" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body faq rev">A pesar de que se intentará solventar todas las incidencias, estas podrán estar un máximo de 6 meses en activo, luego estas no se borraran si no que tendrán que ser reactivadas.</div>
        </div>
        
      </div>
      <div class="accordion-item faq">
        <h2 class="accordion-header" id="flush-headingten">
          <button class="accordion-button collapsed faq alinear" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseten" aria-expanded="false" aria-controls="flush-collapseten">
            ¿Qué información necesito para enviar un incidente?
          </button>
        </h2>
        <div id="flush-collapseten" class="accordion-collapse collapse" aria-labelledby="flush-headingten" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body faq rev">Lo mínimo, nos basta con saber una breve información de tu problema y el modelo del dispositivo en el que te ha ocurrido. Los datos personales no son necesarios ya que los obtenemos de tu perfil.
          </div>
        </div>
      </div>
      <div class="accordion-item faq">
        <h2 class="accordion-header" id="flush-headingeleven">
          <button class="accordion-button collapsed faq alinear" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseeleven" aria-expanded="false" aria-controls="flush-collapseeleven">
            ¿Qué tipo de incidencias puedo reportar?
          </button>
        </h2>
        <div id="flush-collapseeleven" class="accordion-collapse collapse" aria-labelledby="flush-headingeleven" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body faq rev">De todo tipo, desde problemas con sistemas operativos y de copias de seguridad hasta problemas físicos con un dispositivo que no encienda, que se apague de repente etc.</div>
        </div>    
      </div>
  </div>
</section>

  <!--Footer-->

<?php
include 'inc/footer.php';
?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>