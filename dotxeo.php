<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo ("<script>
        dirIP = '" . $_SERVER['REMOTE_ADDR'] . "'" .
        "</script>");
    ?>
    <script>
        investigaIP();
    </script>
    <div class="InsertarResultados"></div>
</body>

</html>