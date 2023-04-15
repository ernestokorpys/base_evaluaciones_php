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
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">
    


    <h2>Noticias - Unidad VI</h2>
    <!--<section id="estilos"> -->
    <section id='noticias'>
    <?php
    $new1 = array("title" => "10 juegos de Mario que se deben conocer antes de ver la película",
                "article" => "El 5 de abril de 2023, se estrena la película de Mario Bros en la que aparecerán la mayoría de los personajes de la franquicia, así como referencias a los videojuegos a los que constantemente enfrenta a Bowser y también, en aquellos en los que el estilo de juego es diferente como Mario Kart.
                Así que antes de que llegue la película o se dé la oportunidad de ir a verla, dejamos una lista de juegos recomendados para disfrutar porque en la producción habrá referencias a ellos.",
                "image" => "mario");
    $new2 = array("title" => "Los países miembros de la OTAN anunciaron un nuevo paquete de ayuda para Ucrania",
                  "article" => "Los aliados occidentales de Ucrania han enviado 70.000 millones de dólares en apoyo militar para ayudar al país en la guerra ante Rusia, dijo el lunes el secretario general de la OTAN, Jens Stoltenberg, y sin negociaciones de paz en el horizonte, la alianza se está preparando para enviar más.
                  “No podemos permitir que Rusia siga minando la seguridad europea”, declaró Stoltenberg en una conferencia de prensa en Bruselas, añadiendo que “no hay indicios de que (el presidente ruso Vladímir) Putin se esté preparando para la paz. Se está preparando para más guerra”.",
                "image" => "soldados");
    $new3 = array("title" => "Volvió Dogecoin: un nuevo truco de Elon Musk hizo subir hasta 30% el valor de la criptomoneda meme",
                  "article" => "Dogecoin subió hasta un 30% después de que los usuarios Twitter notaron que sus botones de inicio cambiaron al meme del perro que da nombre a la criptomoneda.
                  Esta madrugada, algunos usuarios de Twitter comenzaron a notar que el botón de inicio en la esquina superior izquierda de sus navegadores web, generalmente el logotipo de pájaro azul de la compañía, había sido reemplazado por la caricatura del Shiba Inu, que es la cara del meme Doge.",
                  "image" => "doge");

    $new4 = array("title" => "La primera ingeniera aeroespacial de Argentina: “Amo la aerodinámica y mi sueño es aplicarla en autos de Fórmula 1″",
                  "article" => "Valentina se identifica como una persona muy curiosa, que le interesa cómo funcionan las cosas y siempre se mostró apasionada por los aviones. Hoy, esa niña de antes, y tras seis años de estudios en la Universidad Nacional de La Plata (UNLP), se convirtió en la primera ingeniera aeroespacial del país.",
                  "image" => "aeroespacial");



    $news = array($new1,$new2,$new3,$new4);
    foreach($news as $contenido){
        echo "<section id=estilos>";
        foreach($contenido as $clave=>$valor){
            switch ($clave){
                case 'title':
                    echo" <h3> $valor </h3>";
                    break;
                case 'article':
                    echo"<p > $valor </p>";
                    break;
                case 'image':
                    echo '<img id="imagenes" src="imagenes_noticias/' . $valor . '.jpg" alt=" Mi imagen">';
                
                    break;                  
                default:
                    break;
            }
            //echo "<li>$cosas</li>";
        }
        echo "</section>";
    }
     ?>
    <!-- </section> -->

    </section>
</section>


<footer>
<p>Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>