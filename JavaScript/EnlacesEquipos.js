var referencia;

//Declaración de funciones de redes sociales
function NuevaPestaña(referencia) {
    var link;
    switch (referencia) {
        case 'EV1':
            link = ("https://equipo1.prog5a.com");
            break;
        case 'EV2':
            link = ("https://equipo2.prog5a.com");
            break;
        case 'EV3':
            link = ("https://equipo3.prog5a.com");
            break;
        case 'EV4':
            link = ("https://equipo4.prog5a.com");
            break;
        case 'EV5':
            link = ("https://equipo5.prog5a.com");
            break;
        case 'EV6':
            link = ("https://equipo6.prog5a.com");
            break;
        case 'EV7':
            link = ("https://equipo7.prog5a.com");
            break;
        case 'EV8':
            link = ("https://equipo8.prog5a.com");
            break;
        case 'EV9':
            link = ("https://equipo9.prog5a.com");
            break;
        default:
            link = ("https://prog5a.com:8443");
            break;
    }
    // alert("Le redirigiré a mi perfil de Facebook...");
    window.open(link, '_blank');
}