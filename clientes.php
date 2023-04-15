<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Programador web con PHP y MySQL</title>
    <link href="estilos.css" rel="stylesheet" />
</head>

<body>
    <section id="contenedor">
        <header>
            <?php include('botonera_principal.php'); ?>

            <div id="marca">
                <h1>Programador web con PHP y MySQL</h1>
            </div>
        </header>
        <section id="contenido">
            <h2>Clientes - Unidad VII</h2>
            <?php if (isset($_SESSION['clientes']) && !empty($_SESSION['clientes'])) {
                echo 'Sesión iniciada con éxito'; ?>
                <?php include('contenido_clientes.php'); ?>
                <p> </p>
                <li class="transUp"><a href="close_session.php">Cerrar sesión</a></li>
                
                <?php
            } else { ?>
                <h4>Sesión no iniciada, por favor ingrese</h4>
                <?php if (isset($_GET['ingreso']) && $_GET['ingreso'] == 'no') { ?>
                    <h4>Datos no validos, favor de ingresar nuevamente</h4>
                <?php
                }
                ?>
                <?php include('formulario.php'); ?>
            <?php }
            ?>

        </section>

        <footer>
            Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
    </section>
</body>

</html>