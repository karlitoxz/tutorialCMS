<?php 
	
class ControladorBlog{

	//Mostar contenido de la tabla blog
	static public function ctrMostrarBlog(){

		$tabla = "blog";
		$respuesta = ModeloBlog::mdlMostarBlog($tabla);
		return $respuesta;
	}




}








