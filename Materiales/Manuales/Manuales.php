<?php
session_start();
if (empty($_SESSION['ID'])) {
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="shortcut icon" href="../../IMG/Logo-PROG5A.jpg" type="image/x-icon">
    <link id="EtiquetaCSS" rel="Stylesheet" href="../../CSS/CSS GLOBAL - TEMA INSTITUCIONAL PUEBLA.css" Type="text/css" MEDIA="screen">
    <!--<link rel="Stylesheet" href="CSS/Formulario.css" Type="text/css" MEDIA="screen">-->
    <!--<link id="Oculta/Muestra" rel="Stylesheet" href="../CSS/CSS OCULTAMIENTO.css" Type="text/css" MEDIA="screen">-->

    <meta name="description" content="Dante Castelán Carpinteyro: Web dedicada a publicación de proyectos y código personal.">
    <meta name="author" content="Dante Castelán Carpinteyro">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROG5A - Inicio</title>

</head>

<body>
    <script src="../../JavaScript/CambiarTema.js"></script>
    <?php
    include "../../Scripts PHP/ConexiónUsuarios.php";
    include "../../Scripts PHP/InicioSesión.php";
    ?>

    <header id="Encabezado">
        <div id="Contenedor-Encabezado">
            <div id="Contenido-Encabezado">
                <h1>PROG5A</h1> <a href="index.php"> <img id="Logo" src="../../IMG/Logo-PROG5A.jpg" alt="prog5a.castelancarpinteyro.club">
                </a>
                <div class="Menú-Desplegable"> <button class="Botón-Desplegar">Menú</button>
                    <div class="Contenido-Desplegable">
                        <a href="../../Aseo/Aseo.php">Aseo</a>
                        <a href="../../Materiales/Materiales.php">Materiales</a>
                        <a href="https://politiza.castelancarpinteyro.club/">POLITIZA MX</a>
                        <a href="../../ProgramasPC.php">Programas avanzados para PC</a>
                        <a href="../../Scripts PHP/CerrarSesión.php">Cerrar sesión</a>
                        <a id="CambiaTema" onclick="javascript:CambiarTema();">Cambiar tema</a>
                        <a href="../../AcercaDe.php">Acerca de...</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="Encabezado-Superior"></div>
        <div id="Encabezado-Inferior"></div>
    </header>

    <h2 id="IndicaArtículos">Has accedido correctamente</h2>
    <div class="Contenedor-Artículos" id="PartidosPolíticos">
        <h4 class="Autor-Artículo">Por Dante Castelán Carpinteyro.</h4>
        <p class="Descripción-Artículo">
            <?php
            //require('Scripts PHP/Conexión.php');
            echo ("Un gusto tenerte por aquí, " . $_SESSION['Nombre'] . " " . $_SESSION['Apellidos'] . ".");
            ?>
        </p>
        <h3 class="TítuloArtículo">Bienvenido</h3>
        <p class="Descripción-Artículo">Haz uso de los recursos disponibles en esta página. Puedes proponer más funciones y mejoras, o dar retroalimentación a través de cualquiera de lso canales de comunicación disponibles al final de esta página.</p>
        <ul class="ListaLinks">
            <li><a href="5-1/Manual de Aprendizaje - Inglés.pdf" download="Manual de Aprendizaje - Inglés.pdf">Inglés</a><br></li>
            <li> <a href="5-1/Manual de Aprendizaje - Física.pdf" download="Manual de Aprendizaje - Física.pdf">Física</a><br></li>
            <li> <a href="5-1/Manual de Aprendizaje - M5S1.pdf" download="Manual de Aprendizaje - M5S1.pdf">M5S1</a><br></li>
            <li> <a href="5-1/Manual de Aprendizaje - CTSyV.pdf" download="Manual de Aprendizaje - CTSyV.pdf">CTSyV</a><br></li>
            <li> <a href="5-1/Manual de Aprendizaje - Cálculo Integral.pdf" download="Manual de Aprendizaje - Cálculo Integral.pdf">Cálculo Integral</a></li>
        </ul>



    </div>
    <footer>
        <div id="RedesSociales" align="center">
            <hr id="AntesSociales">
            <script lang="JavaScript" src="../../JavaScript/Redes Sociales.js"></script>
            <h3><a href="mailto:dantecc10@gmail.com" class="TítuloArtículo" id="ContactoCorreo">Contacto</a></h3>
            <img class="RedSocial" alt="Ícono de Facebook" id="Facebook" onclick="javascript:AbrirFacebook();" src="../../IMG/íconoFacebook.png" />
            <img class="RedSocial" alt="Ícono de WhatsApp" id="WhatsApp" onclick="javascript:AbrirWhatsApp();" src="../../IMG/íconoWhatsApp.png" />
            <img class="RedSocial" alt="Ícono de Messenger" id="Messenger" onclick="javascript:AbrirMessenger();" src="../../IMG/íconoMessenger.png" />
            <img class="RedSocial" alt="Ícono de YouTube" id="YouTube" onclick="javascript:AbrirYouTube();" src="../../IMG/íconoYouTube.png" />
            <img class="RedSocial" alt="Ícono de Telegram" id="Telegram" onclick="javascript:AbrirTelegram();" src="../../IMG/íconoTelegram.png" />
            <img class="RedSocial" alt="Ícono de Twitter" id="Twitter" onclick="javascript:AbrirTwitter();" src="../../IMG/íconoTwitter.png" />
            <img class="RedSocial" alt="Ícono de GitHub" id="GitHub" onclick="javascript:AbrirGitHub();" src="../../IMG/íconoGitHub.png" />
        </div>
        <p id="copyright">Copyright © Dante Castelán Carpinteyro - <i>Führer Industries</i> - 2022</p>
    </footer>
</body>

</html>