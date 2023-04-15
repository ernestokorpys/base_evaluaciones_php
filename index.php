<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<header>
        <?php include('botonera_principal.php');?>
        <div id="marca">
        	<h1>Programador Web con PHP y MySQL<br/>Nivel Intermedio</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Unidad IV - Introducción a PHP</h2>
    <div id="uni4_1">
        <?php 
        $frase1 = 'Muy buenos días usuario'; //Frase
        $frase2 = 'Esta es una frase para el curso de PHP';  //Frase
        $frase3 = 'Sea usted bienvenido a este sitio'; //Frase
        $frase4 = 'Ante cualquier consulta, no dude en contactarse con servicio técnico'; //Frase
        echo "<h3> Titulo: ".$frase1."<h3>";
        echo "<li>Primera frase: ".$frase2."</li>\n";
        echo "<li>Segunda frase: ".$frase3."</li>\n";
        echo "<li>Tercer frase: ".$frase4."</li>\n";
        ?>

    </div>
    <div id="uni4_2">
        <?php
        $palabra1 = 'EVALUACIÓN'; $palabra2 ='INTEGRADORA'; $palabra3 ='PHP y MySQL'; //Palabras 
        echo "<p>".$palabra1."</p>";
        echo "<p>".$palabra2."</p>";
        echo "<p>".$palabra3."</p>";
        ?>
    </div>
    <div id="uni4_3">
        <?php 
        $edad = 23; $nombre = 'Ernesto Andrés Korpys'; $flag = true; //Variables de tres tipos diferentes
        echo "<h3>".$nombre."</h3>";
        echo "<h3>".$edad."</h3>";
        echo "<h3>Boleana: ".$flag."</h3>";
        ?>
    </div>
    <div id="uni4_4">
        <p>Consigna 4</p>
        <?php 
        $variable_1 = 10; $variable_2 = 50; $variable_3 = 18; //Variables enteras
        echo "<ul>\n";
        echo "<li>Primera variable: ".$variable_1."</li>\n";
        echo "<li>Segunda variable: ".$variable_2."</li>\n";
        echo "<li>Tercera variable: ".$variable_3."</li>\n";
        echo "<li>Operación ((variable_3 + variable_2) / variable_1)= ".($variable_3+$variable_2)/$variable_1."</li>\n";
        echo "</ul>\n";
        ?>
    </div>
    </section>

<footer>
<p>Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>