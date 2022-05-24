    <footer id="footer" class="mt-auto">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Links de utilidad</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="../index.php">Inicio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="../qs.php">Quienes somos</a></li>
                            <?php
                            if ($id_user != 0) {
                                echo HIDE;
                            }
                            ?>
                            <li><i class="bx bx-chevron-right"></i> <a href="../iniciosesion.php">Iniciar sesion</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="../registro.php">Registrarse</a></li>
                            <?php
                            if ($id_user != 0) {
                                echo HIDECLOSE;
                            }
                            ?>
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
                            <a href="https://twitter.com/Tindware" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="https://instagram.com/tindwareoficial" class="instagram"><i class="bi bi-instagram"></i></a>  
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