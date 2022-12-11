<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="IMG/FAVICON TRANSPARENTE.png" type="image/x-icon">
    <link id="EtiquetaCSS" rel="Stylesheet" href="CSS/CSS GLOBAL - TEMA INSTITUCIONAL PUEBLA.css" Type="text/css" MEDIA="screen">
    <link rel="Stylesheet" href="CSS/Formulario.css" Type="text/css" MEDIA="screen">
    <script src="JavaScript/Derivadas_simples.js"></script>

    <title>Campo de pruebas - PROG5A</title>
</head><!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-T8SMX1SM0Z"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-T8SMX1SM0Z');
</script>

<body>
    <script src="JavaScript/CambiarTema.js"></script>
    <!--Encabezado (no mover)--> <br>
    <header id="Encabezado">
        <div id="Contenedor-Encabezado">
            <div id="Contenido-Encabezado">
                <h1>Inicio</h1> <a href="index.php"> <img id="Logo" src="IMG/FAVICON.PNG" alt="prog5a.castelancarpinteyro.club">
                </a>
                <div class="Menú-Desplegable"> <button class="Botón-Desplegar">Menú</button>
                    <div class="Contenido-Desplegable">
                        <a href="https://politiza.castelancarpinteyro.club/">POLITIZA MX</a>
                        <a href="ProgramasPC.php">Programas avanzados para PC</a>
                        <a href="AcercaDe.php">Acerca de...</a>
                        <a id="CambiaTema" onclick="javascript:CambiarTema();">Cambiar tema</a>
                        <button onclick="document.getElementById('DivInicioSesión').style.display='block'" class="IniciarSesión DecoradoBotón" style="width:auto;" id="BotónAbreInicioSesión">Iniciar sesión</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="Encabezado-Superior"></div>
        <div id="Encabezado-Inferior"></div>
    </header>
    <h2 id="IndicaArtículos">Mi página de inicio</h2>
    <div class="Contenedor-Artículos" id="PartidosPolíticos">
        <h4 class="Autor-Artículo">Por Dante Castelán Carpinteyro.</h4>
        <h3 class="TítuloArtículo">En construcción...</h3>
        <p class="Descripción-Artículo">Pronto actualizaré el código de index; paciencia.</p>
    </div>
    <?php
    ?>
    <footer>
        <div id="RedesSociales" align="center">
            <hr id="AntesSociales">
            <script lang="JavaScript" src="JavaScript/Redes Sociales.js"></script>
            <h3><a href="mailto:dantecc10@gmail.com" class="TítuloArtículo" id="ContactoCorreo">Contacto</a></h3>
            <img class="RedSocial" alt="Ícono de Facebook" id="Facebook" onclick="javascript:AbrirFacebook();" src="IMG/íconoFacebook.png" />
            <img class="RedSocial" alt="Ícono de WhatsApp" id="WhatsApp" onclick="javascript:AbrirWhatsApp();" src="IMG/íconoWhatsApp.png" />
            <img class="RedSocial" alt="Ícono de Messenger" id="Messenger" onclick="javascript:AbrirMessenger();" src="IMG/íconoMessenger.png" />
            <img class="RedSocial" alt="Ícono de YouTube" id="YouTube" onclick="javascript:AbrirYouTube();" src="IMG/íconoYouTube.png" />
            <img class="RedSocial" alt="Ícono de Telegram" id="Telegram" onclick="javascript:AbrirTelegram();" src="IMG/íconoTelegram.png" />
            <img class="RedSocial" alt="Ícono de Twitter" id="Twitter" onclick="javascript:AbrirTwitter();" src="IMG/íconoTwitter.png" />
            <img class="RedSocial" alt="Ícono de GitHub" id="GitHub" onclick="javascript:AbrirGitHub();" src="IMG/íconoGitHub.png" />
        </div>
        <p id="copyright">Copyright © Dante Castelán Carpinteyro - <i>Führer Industries</i> - 2022</p>
    </footer>
</body>

</html>