<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mapa - Tindware</title>
    <script src="scripts/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="estilos/mapa.css" type="text/css"/>
    <script src="scripts/loc.js"></script>
    <script src="scripts/mapa.js"></script>
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
    <div id="main">
        <div id="mapa">
            <div style="width: 100%">
                <iframe id="gmap"
                    scrolling="no"
                    marginheight="0"
                    marginwidth="0"
                    src=""
                    width="100%"
                    height="615"
                    frameborder="0">
                </iframe>
                <span class="errorMaps" id="gmap_antes">Por favor, activa la ubicación en su navegador o escriba su ubicación en el cuadro de texto.</span>
                <span class="errorMaps" id="gmap_nosoporte">Su navegador no permite la geolocalización, escriba su ubicación en el cuadro de texto.</span>
                <span class="errorMaps" id="gmap_noseguro">Esta función solo funciona en sitios seguros (HTTPS).</span>
            </div>
        </div>
        <div id="columna">
            <span class="titulo_columna">Resultados de la busqueda</span><br/>
            <input type="text" id="inputMostrar" placeholder="Introduce tu lugar..."/>
            <button id="buttonMostrar" onclick="await getLocForm()">Mostrar</button>
            <div id="resultados"></div>
        </div>
    </div>
</body>
</html>
