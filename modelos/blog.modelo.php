<?php 
	require_once "conexion.php";

	class ModeloBlog{

	//Mostar contenido de la tabla blog
	static public function mdlMostarBlog($tabla){
		$stmt = Conexion::conectar()-> prepare("SELECT * FROM $tabla");
		$stmt -> execute();
		return $stmt -> fetch();
		$stmt = null;
	}
	//Mostar contenido de la tabla blog

		//Mostar categorias de la tabla blog
	static public function mdlMostarCategorias($tabla){
		$stmt = Conexion::conectar()-> prepare("SELECT * FROM $tabla");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt = null;
	}
	//Mostar categorias de la tabla blog
}

?>