<?php

require_once '../models/User.php';

$usuario = $_POST["username"];
$password = $_POST["password"];

if ($usuario != "" && $password != "") {
    $usuarios = User::login($usuario);
    if (!empty($usuarios)) {
        $usuario = $usuarios[0];
        if (password_verify($password, $usuario["clave"])) {
            session_start();
            $_SESSION["username"] = $usuario;
            $_SESSION["name"] = $usuario["nombre"];
            $_SESSION["rol"] = $usuario["rol"];
            header("Location: ../../dashboard.php");
        } else {
            echo "Hay un error de autentificacion";
        }
    } else {
         echo "Hay un error de autentificacion";
    }
}
