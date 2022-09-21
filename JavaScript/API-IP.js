var urlBase = "http://ip-api.com/json/", finURL = "?fields=61439", dirIP, urlCompleta;

function investigaIP(urlBase, finURL, dirIP) { //Muestra la información a través de la inserción de código para construir tablas

    urlCompleta = (urlBase + dirIP + finURL);
    /*¡Éxito!*/ // Línea temporal de depuración: // console.log(stringSeleccionadoEstado); //Esto en consola escribe la devolución del estado elegido ej.: 'Aguascalientes'
    fetch(urlVariable).then(function (response) {
        //Lógica de éxito
        return response.json();
    }).then(function (data) {
        //Lógica de éxito con JSON
        document.getElementById("InsertarResultados").innerHTML = ("<table><tr><th>Status</th><th>Message</th><th>Country</th><th>Country Code</th><th>Región</th><th>NombreRegión</th><th>City</th><th>Postal</th><th>Latitud</th><th>Longitud</th><th>ZonaHoraria</th><th>ISP</th><th>ORG</th><th>Query</th>    </tr>");


        for (var i = 1; i != data.length; i++) {
            if (data[i]["entidad"] == datoEstado) {
                document.getElementById("InsertarResultados").innerHTML += ("<tr>" + "<td>" + data[i]["status"] + "</td>" + "<td>" + data[i]["message"] + "</td>" + "<td>" + data[i]["country"] + "</td>" + "<td>" + data[i]["countryCode"] + "</td>" + "<td>" + data[i]["region"] + "</td>" + "<td>" + data[i]["regionName"] + "</td>" + "<td>" + data[i]["city"] + "</td>" + "<td>" + data[i]["zip"] + "</td>" + "<td>" + data[i]["lat"] + "</td>" + "<td>" + data[i]["lon"] + "</td>" + "<td>" + data[i]["timezone"] + "</td>" + "<td>" + data[i]["isp"] + "</td>" + "<td>" + data[i]["org"] + "</td>" + "<td>" + data[i]["query"] + "</td></tr>");

                console.log("IP: ", dirIP, "\nStatus: ", data[i]["status"], "\nMessage", data[i]["message"], " \nCountry", data[i]["country"], " \nCountryCode", data[i]["countryCode"], "\nRegion", data[i]["region"], "\nNombre de region", data[i]["regionName"], "\nCiudad", data[i]["city"], "\nZip", data[i]["zip"], "\nLatitud", data[i]["lat"], "\nLongitud", data[i]["lon"], "\nZona horaria", data[i]["timezone"], "\nISP", data[i]["isp"], "\nORG", data[i]["org"], "\nQuery", data[i]["query"])
                contador++;
            }
            else {
                console.log("Diputad@ ", data[i]["número"], ".- ", data[i]["nombre"], " ", data[i]["apellidoPaterno"], " ", data[i]["apellidoMaterno"], " del Estado de ", data[i]["entidad"], " que representa al (a la) ", data[i]["distrito_circunscripcion"], "que representa a ", data[i]["partido"]) + " no aplica para el filtro de Estados";
            }
        }
    }).catch(function (error) {
        //Lógica de error
        console.log("Error: ", error);
    });
    urlVariable = "";
}