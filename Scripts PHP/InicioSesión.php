<?php
session_start();
if (!empty($_POST['InicioSesión'])) {
    if (!empty($_POST['Usuario']) and !empty($_POST['Contraseña'])) {
        $usuario = $_POST['Usuario'];
        $contraseña = $_POST['Contraseña'];
        $sql = $conexión->query("SELECT * FROM `usuarios_prog5a` WHERE `Usuario`='$usuario' AND `Contraseña`='$contraseña'");
        if ($datos = $sql->fetch_object()) {
            $_SESSION['ID'] = $datos->ID;
            $_SESSION['Nombre'] = $datos->Nombre;
            $_SESSION['Apellidos'] = $datos->Apellidos;
            $_SESSION['Usuario'] = $datos->Usuario;
            $_SESSION['Calificación'] = $datos->Calificación;
            header("location: ../Exámenes/ExamenLiteratura.php");
        } else {
            echo "<div>Acceso denegado<div>";
        }
    } else {
        echo "Campos vacíos";
    }
}
