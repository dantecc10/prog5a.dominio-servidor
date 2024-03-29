<?php
session_start();
if (empty($_SESSION['ID'])) {
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="shortcut icon" href="../IMG/Logo-PROG5A.png" type="image/x-icon">
    <link id="EtiquetaCSS" rel="Stylesheet" href="../CSS/CSS GLOBAL - TEMA INSTITUCIONAL PUEBLA.css" Type="text/css" MEDIA="screen">
    <!--<link rel="Stylesheet" href="CSS/Formulario.css" Type="text/css" MEDIA="screen">-->
    <!--<link id="Oculta/Muestra" rel="Stylesheet" href="../CSS/CSS OCULTAMIENTO.css" Type="text/css" MEDIA="screen">-->

    <meta name="description" content="Dante Castelán Carpinteyro: Web dedicada a publicación de proyectos y código personal.">
    <meta name="author" content="Dante Castelán Carpinteyro">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROG5A - Equipo 2 de aseo</title>

</head><!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-T8SMX1SM0Z"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-T8SMX1SM0Z');
</script>

<body onload="getLocation();">
    <script src="../JavaScript/CambiarTema.js"></script>
    <script src="../JavaScript/Localización.js"></script>
    <?php
    include "../Scripts PHP/ConexiónUsuarios.php";
    include "../Scripts PHP/InicioSesión.php";
    ?>
    <div id="DivInicioSesión" class="modal">
        <form class="modal-content animate myForm" action="" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('DivInicioSesión').style.display='none'" class="CerrarCuadro" title="Close Modal">×</span>
                <img src="../IMG/img_avatar2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="Usuario"><b>Usuario</b></label>
                <input type="text" placeholder="usuario@prog5a*" name="Usuario" required="">
                <br>
                <label for="Contraseña"><b>Contraseña</b></label>
                <input type="password" placeholder="Contraseña (@prog5a!!)*" name="Contraseña" required="">

                <input type="hidden" name="latitude" value="">
                <input type="hidden" name="longitude" value="">

                <input type="submit" name="InicioSesión" value="Iniciar sesión" class="IniciarSesión DecoradoBotón">

                <label>
                    <input type="checkbox" checked="checked" name="remember">Recordarme
                </label>

            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('DivInicioSesión').style.display='none'" class="BotónCancelar DecoradoBotón">Cancel</button>
                <span class="psw">¿Olvidaste tu <a href="#">contraseña</a>?</span>
            </div>
        </form>
    </div>
    <br>
    <header id="Encabezado">
        <div id="Contenedor-Encabezado">
            <div id="Contenido-Encabezado">
                <h1>PROG5A</h1> <a href="index.php"> <img id="Logo" src="IMG/Logo-PROG5A.png" alt="prog5a.castelancarpinteyro.club">
                </a>
                <div class="Menú-Desplegable"> <button class="Botón-Desplegar">Menú</button>
                    <div class="Contenido-Desplegable">
                    <a href="Aseo1.php">Equipo 1</a>
                        <a href="Aseo2.php">Equipo 2</a>
                        <a href="Aseo3.php">Equipo 3</a>
                        <a href="Aseo4.php">Equipo 4</a>
                        <a href="Aseo5.php">Equipo 5</a>
                        <a href="Aseo6.php">Equipo 6</a>
                        <a href="Aseo7.php">Equipo 7</a>
                        <a href="https://politiza.castelancarpinteyro.club/">POLITIZA MX</a>
                        <a href="../ProgramasPC.php">Programas avanzados para PC</a>
                        <a href="../AcercaDe.php">Acerca de...</a>
                        <a id="CambiaTema" onclick="javascript:CambiarTema();">Cambiar tema</a>
                        <button onclick="document.getElementById('DivInicioSesión').style.display='block'" class="IniciarSesión DecoradoBotón" style="width:auto;" id="BotónAbreInicioSesión">Iniciar sesión</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="Encabezado-Superior"></div>
        <div id="Encabezado-Inferior"></div>
    </header>

    <h2 id="IndicaArtículos">Equipos de aseo</h2>
    <div class="Contenedor-Artículos" id="PartidosPolíticos">
        <h4 class="Autor-Artículo">Por Dante Castelán Carpinteyro.</h4>
        <h3 class="TítuloArtículo">Organización</h3>
        <p class="Descripción-Artículo"></p>
    </div>

    <div>
        <p class="Descripción-Artículo">
            <?php
            echo ("Un gusto tenerte por aquí, " . $_SESSION['Nombre'] . ". Aquí tienes la lista de estudiantes del PROG5A y la integración de los equipos de aseo.");
            ?>
        </p>
        <!--
        <input class='BotónEstándar' type='submit' value="Filtrar productos" onclick="javascript:FiltrarProductos();">
    -->
        <table class="InsertarResultados Examen">
            <?php
            $consulta = "SELECT * FROM `usuarios_prog5a` WHERE `EquipoAseo`=2";
            $resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nombre</th>";
            echo "<th>Equipo</th>";
            echo "</tr>";
            while ($columna = mysqli_fetch_array($resultado)) {
                echo "<tr>";
                echo "<td>" . $columna['ID'] . "</td>";

                echo "<td>" . $columna['Nombre'] . " " . $columna['Apellidos'] .  "</td>";

                echo "<td>" . $columna['EquipoAseo'] . "</td>";
                echo "</tr>";
            }
            mysqli_close($conexión)
            ?>
        </table>
    </div>



    <footer>
        <div id="RedesSociales" align="center">
            <hr id="AntesSociales">
            <script lang="JavaScript" src="../JavaScript/Redes Sociales.js"></script>
            <h3><a href="mailto:dantecc10@gmail.com" class="TítuloArtículo" id="ContactoCorreo">Contacto</a></h3>
            <img class="RedSocial" alt="Ícono de Facebook" id="Facebook" onclick="javascript:AbrirFacebook();" src="../IMG/íconoFacebook.png" />
            <img class="RedSocial" alt="Ícono de WhatsApp" id="WhatsApp" onclick="javascript:AbrirWhatsApp();" src="../IMG/íconoWhatsApp.png" />
            <img class="RedSocial" alt="Ícono de Messenger" id="Messenger" onclick="javascript:AbrirMessenger();" src="../IMG/íconoMessenger.png" />
            <img class="RedSocial" alt="Ícono de YouTube" id="YouTube" onclick="javascript:AbrirYouTube();" src="../IMG/íconoYouTube.png" />
            <img class="RedSocial" alt="Ícono de Telegram" id="Telegram" onclick="javascript:AbrirTelegram();" src="../IMG/íconoTelegram.png" />
            <img class="RedSocial" alt="Ícono de Twitter" id="Twitter" onclick="javascript:AbrirTwitter();" src="../IMG/íconoTwitter.png" />
            <img class="RedSocial" alt="Ícono de GitHub" id="GitHub" onclick="javascript:AbrirGitHub();" src="../IMG/íconoGitHub.png" />
        </div>
        <p id="copyright">Copyright © Dante Castelán Carpinteyro - <i>Führer Industries</i> - 2022</p>
    </footer>
</body>

</html>