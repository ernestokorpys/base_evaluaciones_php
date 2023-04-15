<?php
$nombre = $_POST['nombre_consulta'];
$apellido = $_POST['apellido_consulta'];
$email = $_POST['email_consulta'];
$consulta = $_POST['texto_consulta'];


include("conexion.php");

mysqli_query($datos_bd,"INSERT INTO consultas VALUES (DEFAULT,'$nombre','$apellido','$email','$consulta')");

header('Location: contacto.php?ok_db');
?>


