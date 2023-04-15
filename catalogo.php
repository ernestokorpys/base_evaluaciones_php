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
        <h2>Catálogo - Unidad V</h2>
        <nav >
        <ul>
            <li class="transUp"><a href="catalogo.php?producto=Sillón+Capri&imagen=sillon1&precio=345.00&caracteristicas=Concebida+para+ser+utilizada+tanto+bajo+techo+como+a+la+intemperie.+La+madera+de+origen+brasilera+está+acabada+con+un+recubrimiento+de+Resina+Polisten+que+la+embellece." >Sillon</a ></li>
            <li class="transUp"><a href="catalogo.php?producto=Mesa+Ipanema&imagen=ipanema&precio=500.00&caracteristicas=Se+trata+de+una+colección+de+muebles+de+madera+de+eucaliptos,+certificada+con+el+sello+FSC+y+concebida+para+ser+utilizada+tanto+bajo+techo+como+a+la+intemperie.+La+madera+es+de+origen+brasilera.+Las+medidas+son:+120+cms.">Mesa Ipanema</a ></li>
            <li class="transUp"><a href="catalogo.php?producto=Banco+Venecia&imagen=venecia&precio=450&caracteristicas=Se+trata+de+una+colección+de+muebles+de+madera+de+eucaliptos,+certificada+con+el+sello+FSC+(SWCOC-091)+y+concebida+para+ser+utilizada+tanto+bajo+techado+como+a+la+intemperie.+La+madera+es+de+origen+brasilera.+Las+medidas+son:+120+cms.">Banco Venecia</a ></li>
        </ul>
        </nav>
        <article>
        <?php
        if(!empty($_GET['producto'])){
            $imagen = $_GET['imagen'];
            echo "<p>Producto: ".$_GET['producto']."</p>";
            echo "<p>Costo: $".$_GET['precio']."</p>";
            echo "<p>Descripción: ".$_GET['caracteristicas']."</p>";
            echo '<img src="imagenes/' . $imagen . '.jpg" alt=" Mi imagen">';
        }
        else{
            echo "<p>Por favor seleccione alguno de nuestros productos.</p>";
        }
            ?>
        </article>
    </section>

<footer>
<p>Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>