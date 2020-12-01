<?php 
	$blog = ControladorBlog::ctrMostrarBlog();
	$categorias = ControladorBlog::ctrMostrarCategorias();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title><?php echo $blog['titulo'] ?></title>

	<meta name="titulo" content="Juanito Travel">

	<meta name="description" content="<?php echo $blog['descripcion']; ?>">
<?php
 $pc = json_decode($blog['palabras_claves'],true);
 $p_clave = "";
 foreach ($pc as $key => $value) {
  	$p_clave .= $value.", ";
  }
$p_clave =substr($p_clave, 0,-2);
?>

	<meta name="keywords" content="<?php echo $p_clave; ?>">

	<link rel="icon" href="vistas/img/icono.jpg">

	<!--=====================================
	PLUGINS DE CSS
	======================================-->
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="vistas/css/bootstrap.min.css">

	<link href="https://fonts.googleapis.com/css?family=Chewy|Open+Sans:300,400" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">

	<!-- JdSlider -->
	<!-- https://www.jqueryscript.net/slider/Carousel-Slideshow-jdSlider.html -->
	<link rel="stylesheet" href="vistas/css/plugins/jquery.jdSlider.css">

	<link rel="stylesheet" href="vistas/css/style.css">

	<!--=====================================
	PLUGINS DE JS
	======================================-->

	<!-- jQuery library -->
	<script src="vistas/js/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="vistas/js/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="vistas/js/bootstrap.min.js"></script>

	<!-- JdSlider -->
	<!-- https://www.jqueryscript.net/slider/Carousel-Slideshow-jdSlider.html -->
	<script src="vistas/js/plugins/jquery.jdSlider-latest.js"></script>
	
	<!-- pagination -->
	<!-- http://josecebe.github.io/twbs-pagination/ -->
	<script src="vistas/js/plugins/pagination.min.js"></script>

	<!-- scrollup -->
	<!-- https://markgoodyear.com/labs/scrollup/ -->
	<!-- https://easings.net/es# -->
	<script src="vistas/js/plugins/scrollUP.js"></script>
	<script src="vistas/js/plugins/jquery.easing.js"></script>

</head>

<body>
<?php 
	/*=============================================
	Modulos fijos superiores
	=============================================*/
	
	include "paginas/modulos/cabecera.php";
	include "paginas/modulos/redes-sociales-movil.php";
	include "paginas/modulos/buscador-movil.php";
	include "paginas/modulos/menu.php";

	/*=============================================
	Navegar entre paginas
	=============================================*/
	
	
	include "paginas/inicio.php";
	//include "paginas/categorias.php";
	//include "paginas/articulos.php";

	/*=============================================
	Modulos fijos inferiores
	=============================================*/

	include "paginas/modulos/footer.php";
 ?>
</body>


<script src="vistas/js/script.js"></script>


</body>
</html>