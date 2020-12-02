<?php 
	
class ControladorBlog{

	//Mostar contenido de la tabla blog
	static public function ctrMostrarBlog(){

		$tabla = "blog";
		$respuesta = ModeloBlog::mdlMostarBlog($tabla);
		return $respuesta;
	}

	//Mostar categorias
	static public function ctrMostrarCategorias(){

		$tabla = "categorias";
		$respuesta = ModeloBlog::mdlMostarCategorias($tabla);
		return $respuesta;
	}

	//Mostar articulo y categorias con inner join
		static public function ctrMostrarConInnerJoin(){

		$tabla1 = "categorias";
		$tabla2 = "articulos";
		$respuesta = ModeloBlog::mdlMostrarConInnerJoin($tabla1,$tabla2);
		return $respuesta;
	}



}








