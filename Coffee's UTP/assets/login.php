<?php
session_start(); // Iniciar la sesión

$matricula_correcta = "1234";
$contrasena_correcta = "4321";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricula = $_POST["matricula"];
    $contrasena = $_POST["contrasena"];

    if ($matricula === $matricula_correcta && $contrasena === $contrasena_correcta) {
        $_SESSION["matricula"] = $matricula;
        header("Location: pagina_principal.html");
        exit();
    } else {
        echo "Credenciales incorrectas.";
    }
}
?>
