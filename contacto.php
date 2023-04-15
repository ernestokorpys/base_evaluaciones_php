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
            <nav id="botonera_principal">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="catalogo.php">Catálogo</a></li>
                    <li><a href="noticias.php">Noticias</a></li>
                    <li><a href="clientes.php">Clientes</a></li>
                    <li><a href="contacto.php">Contáctenos</a></li>
                </ul>
            </nav>
            <div id="marca">
                <h1>Programador web con PHP y MySQL</h1>
            </div>
        </header>
        <section id="contenido">
            <h2>Contáctenos - Unidad VIII</h2>


            <section id="consultas">
                <div class="login-box">
                    <h2>Su consulta</h2>
                    <form method="POST" action="enviar_consulta.php">
                        <div class="user-box">
                            <input type="text" name="nombre_consulta" required="">
                            <label>Nombre</label>
                        </div>

                        <div class="user-box">
                            <input type="text" name="apellido_consulta" required="">
                            <label>Apellido</label>
                        </div>

                        <div class="user-box">
                            <input type="email" name="email_consulta" required="">
                            <label>Correo electrónico</label>
                        </div>

                        <div class="user-box">
                            <input type="text" name="texto_consulta" required="">
                            <label>Consulta</label>
                        </div>

                        <button>
                            <a type="submit" class="submit" value="Confirmar">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Enviar
                            </a>
                        </button>

                    </form>
                </div>

            </section>
            <?php
            if (isset($_GET['ok_db'])) {
                echo '<p>Dato cargado</p>';
            }
            ?>
            <!-- Mostrar información -->
            
            <?php
            /*
            include("conexion.php");
            $consulta = mysqli_query($datos_bd, 'SELECT * FROM consultas');
            while ($listar_consulta = mysqli_fetch_assoc($consulta)) {
                echo "<div>";
                echo "<p>" . $listar_consulta['nombre'] . "</p>";
                echo "<p>" . $listar_consulta['consulta'] . "</p>";
                echo "</div>";
            }*/
            ?>

        </section>

        <footer>
            Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
    </section>
</body>

</html>