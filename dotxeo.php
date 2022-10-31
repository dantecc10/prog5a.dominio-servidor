<!DOCTYPE html>
<html lang="en">

<head>
<meta name="description" content="PROG5A: Web dedicada a proyectos del grupo de programación 5A del CECyTE Plantel Chignahuapan.">
    <meta name="author" content="Dante Castelán Carpinteyro, Jeremy Hernández Balderas, Melanie Aidee Cruz López">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Document</title>
</head>

<body>
    <?php
    echo ("<script src='JavaScript/API-IP.js' class='Borrar'></script>
    <script src='JavaScript/BorraEvidencia.js'></script>");
    echo ("<script class='Borrar'>
        dirIP = '" . $_SERVER['REMOTE_ADDR'] . "';</script>");
    echo ("<script class='Borrar'>investigaIP();</script>");
    ?>

    <div class="InsertarResultados"></div>
</body>

</html>