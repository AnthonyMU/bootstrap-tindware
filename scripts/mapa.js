var lat = "";
var lon = "";
boton = document.getElementById("buttonMostrar");
boton.onclick = await getLocForm();

async function obtenerLatLon() {
    
    function geoloc_ok(pos) {
        console.log(pos)
    }
    
    function geoloc_error(err) {
        console.log(err);
    }

    return new Promise((geoloc_ok, geoloc_error) => {
        navigator.geolocation.getCurrentPosition(geoloc_ok, geoloc_error);
    }).catch(function(error) {
        console.log(error);
    });
}

async function coordenadasDesdeGeocoding(query) {
    var apikey = "2a6ef58c88ad4fd9810b422c5348c25e" // en produccion esto no deberia estar asi c:;
    var requestOptions = {
        method: "GET",
    };

    fetch("https://api.geoapify.com/v1/geocode/search?text=" + query + "&format=json&limit=1&bias=countrycode:es&apiKey=" + apikey, requestOptions)
    .then(response => response.json())
    .then(result => {
        //console.log(result)
        formatted = result.results[0].formatted;
        lat = result.results[0].lat.toString();
        lon = result.results[0].lon.toString();
        var objeto = {}
        var objeto = {lat, lon, formatted};
        console.log(objeto)
    })
    .catch(error => {
        console.warn('ERROR: No se ha encontrado ' + query)
        return error;
    })
}

function obtenerOfertasCercanas(lat, lon) {
    console.log("Hemos recibido lat: " + lat + " lon: " + lon);
    // Como sortear las ofertas: https://stackoverflow.com/a/26837460
    function calculateDistance(lat1, lon1, lat2, lon2) {
        var radlat1 = Math.PI * lat1/180
        var radlat2 = Math.PI * lat2/180
        var theta = lon1-lon2
        var radtheta = Math.PI * theta/180
        var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
        dist = Math.acos(dist)
        dist = dist * 180/Math.PI
        dist = dist * 60 * 1.1515
        dist = dist * 1.609344 // km
        return dist
    }
    
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("GET", "scripts/queryJSON.php");
    xmlHttp.send();
    xmlHttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var ofertas = JSON.parse(this.responseText);

            for ( i = 0; i < ofertas.length; i++) {
                ofertas[i]["distance"] = calculateDistance(lat,lon,ofertas[i]["lat"],ofertas[i]["lon"]);
                console.log(ofertas[i]["distance"]);
              }

            ofertas.sort(function(a, b){
                return a.distance - b.distance;
            });

            console.log(ofertas);

            $("#resultados").empty();
            for (i = 0; i < ofertas.length; i++) {
                var idOfertaHTML = "oferta" + i.toString();
                $("#resultados").append($("<div>").attr("id", idOfertaHTML))
                $("#" + idOfertaHTML).append($("<a>").attr("href", "viewOferta.php?id=" + ofertas[i]["id"])).append($("<h3>").text(ofertas[i]["titulo"]));
                $("#" + idOfertaHTML).append($("<p>").text(ofertas[i]["descripcion"]))
                $("#" + idOfertaHTML).append($("<p>").text("Distancia: " + ofertas[i]["distance"] + " km"))
                $("#" + idOfertaHTML).append($("<p>").text("Usuario: " + ofertas[i]["username"]))
            }
        }
    }
}

async function updateGMaps(lat, lon, query) {
    var urlTemplate = "https://maps.google.com/maps?q=QUERY&t=&z=13&ie=UTF8&iwloc=&output=embed";
    if (query === undefined) {
        var query = lat + ',' + lon;
    }
    if (lat === undefined) {
        await coordenadasDesdeGeocoding(query);
        console.log("YA HECHO GEOCODING: lat: " + lat + " lon: " + lon);
        }
    var url = urlTemplate.replace('QUERY', query);
    $("#gmap").attr('src', url);
    $("#gmap_antes").hide();
    $("#gmap").show();
    obtenerOfertasCercanas(lat, lon);
}

async function getLocForm() {
    var texto = $("#inputMostrar").val();
    if (!texto) {
        alert("Form vacio");
    }
    else {
        console.log("UPDATE texto: " + texto);
        updateGMaps(undefined, undefined, texto);
        //Ahora obtenemos las coords desde 
        await coordenadasDesdeGeocoding(texto)
    }
}

$(function(){
    $("#inputMostrar").keypress(function (e) {
        var key = e.which;
        if(key == 13) {
            $("#buttonMostrar").click();
        }
    });
});

$(document).ready(async function() {
    $("#gmap").hide();
    $("#gmap_nosoporte").hide();
    $("#gmap_noseguro").hide();

    if (window.isSecureContext) {
        if (navigator.geolocation) {
            console.log('tiene api')
            const promiseLatLon = await obtenerLatLon();
            if (!promiseLatLon) {
                console.log("ERROR: " + error);
            }
            else {
                var lat = promiseLatLon.coords.latitude.toString();
                var lon = promiseLatLon.coords.longitude.toString();
                console.log(`UPDATE lat: ${lat} lon: ${lon}`)
                updateGMaps(lat, lon);
            }
        }
        else {
            $("#gmap_antes").hide();
            $("#gmap_nosoporte").show();
        }
    }
    else {
        $("#gmap_antes").hide();
        $("#gmap_noseguro").show();
    }
});

