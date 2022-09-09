<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Page</title>
</head>

<body>
    <table>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Usuario</td>
            <td>Localización</td>
        </tr>

        <?php
        $servername = "localhost";
        $database = $dbname = "prog5a";
        $username = "prog5a";
        $password = "@prog5a!!";
        // Create connection
        $conexión = mysqli_connect($servername, $username, $password, $database);
        // Check connection
        if (!$conexión) {
            die("<p>Error al conectar con la base de datos: " . mysqli_connect_error() . "</p><p>Pruebe a verificar la conexión del servidor...</p>");
        }
        echo "Conexión a la base de datos: exitosa";

        $rows = mysqli_query($conn, "SELECT * FROM `localizaciones` ORDER BY `id` ASC");
        $i = 1;

        foreach ($rows as $row) :
        ?>
            <tr>
                <td>
                    <?php
                    echo $i++;
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['Nombre'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['Usuario'];
                    ?>
                </td>
                <?php
                $MapsSource = ("https://www.google.com/maps?q=" . $row['latitude'] . "," . $row['longitude'] . "&hl=es;z=14&output=embed");
                ?>
                <td style="width: 450px; height: 450px;"> <iframe src="<?php echo $MapsSource; ?>" style="width: 100%; height: 100%;"></iframe> </td>
            </tr>
        <?php
        endforeach;
        ?>
    </table>
    <br>
    <a href="index.php">Index Page</a>
</body>

</html>