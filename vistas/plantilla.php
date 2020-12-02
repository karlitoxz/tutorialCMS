<?php 
	$blog = ControladorBlog::ctrMostrarBlog();
	$categorias = ControladorBlog::ctrMostrarCategorias();
	$articulos = ControladorBlog::ctrMostrarConInnerJoin();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">


<?php 

		$validarRuta = "";


	if (isset($_GET['pagina'])) {

		foreach ($categorias as $key => $value) {
			if ($_GET['pagina'] == $value["ruta_categoria"]) {
				$validarRuta = 'categorias';
				break;
			}
		}

		if ($validarRuta == 'categorias') {
			echo '	<title>'.$blog['titulo']." | ".$value["descripcion_categoria"].'</title>	<meta name="titulo" content="'.$value["titulo_categoria"].'"> 	<meta name="description" content="'.$value["ruta_categoria"].'">';
			$pc = json_decode($value['p_claves_categoria'],true);
			$p_clave = "";
			foreach ($pc as $key => $value) {
				$p_clave .= $value.", ";
			}
			$p_clave =substr($p_clave, 0,-2);
			echo '<meta name="keywords" content="'.$p_clave.'">';
		}else{
			echo '	<title>'.$blog['titulo'] .'</title>	<meta name="titulo" content="Juanito Travel"> 	<meta name="description" content="'.$blog['descripcion'].'">';
			$pc = json_decode($blog['palabras_claves'],true);
			$p_clave = "";
			foreach ($pc as $key => $value) {
				$p_clave .= $value.", ";
			}
			$p_clave =substr($p_clave, 0,-2);
		echo '<meta name="keywords" content="'.$p_clave.'">';
		}

	} else {
		echo '	<title>'.$blog['titulo'] .'</title>	<meta name="titulo" content="Juanito Travel"> 	<meta name="description" content="'.$blog['descripcion'].'">';
			$pc = json_decode($blog['palabras_claves'],true);
			$p_clave = "";
			foreach ($pc as $key => $value) {
				$p_clave .= $value.", ";
			}
			$p_clave =substr($p_clave, 0,-2);
		echo '<meta name="keywords" content="'.$p_clave.'">';
	}





 ?>

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
	$validarRuta = "";
	if (isset($_GET['pagina'])) {
		foreach ($categorias as $key => $value) {
			if ($_GET['pagina'] == $value["ruta_categoria"]) {
				$validarRuta = "categorias";
				break;
			}
		}
		//Validar ruta
		if ($validarRuta == "categorias") {
			include "paginas/categorias.php";
		} else {
			include "paginas/404.php";
		}
		
	} else {
		include "paginas/inicio.php";
	}
	
	/*=============================================
	Modulos fijos inferiores
	=============================================*/

	include "paginas/modulos/footer.php";
 ?>
</body>


<script src="vistas/js/script.js"></script>


</body>
</html>