<?php
session_start();
$mail_session = $_POST["mail_user"];
$password_session = $_POST["password_user"];


if($mail_session=='cliente@gmail.com' && $password_session == 'phpintermedio') {
    $_SESSION['clientes'] = $mail_session;
    header("Location: clientes.php#contenido");
} else {
    echo "Por favor, ingrese un nombre de usuario para iniciar sesión.";
    header("Location: clientes.php?ingreso=no#contenido");
}
?>
