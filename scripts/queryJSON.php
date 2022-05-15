<?php
    $ofertas = array();
    $i = 0;
    include '../inc/constantes.php';
    $con = mysqli_connect('localhost', 'root', MYSQL_PASSWD);
    $query = "SELECT id, id_usuariopart, titulo, fechacreacion  FROM tindware.ofertas WHERE fechaasignado IS NULL;";
    $out = mysqli_query($con, $query);
    
    while ($resultado = mysqli_fetch_array($out)) {
        $id_oferta = $resultado['id'];
        $titulo = $resultado['titulo'];
        $id_usuariopart = $resultado['id_usuariopart'];
        
        
        $queryPart = "SELECT username, lat, lon FROM tindware.usuario WHERE id = $id_usuariopart;";
        $outTemp = mysqli_query($con, $queryPart);
        $resultadoTemp = mysqli_fetch_array($outTemp);

        $usernamePart = $resultadoTemp['username'];
        $latPart = $resultadoTemp['lat'];
        $lonPart = $resultadoTemp['lon'];

        $ofertas[$i] = array('id' => $id_oferta, 'titulo' => $titulo, 'username' => $usernamePart, 'lat' => $latPart, 'lon' => $lonPart);
        $i++;
    }
    echo json_encode($ofertas);
?>