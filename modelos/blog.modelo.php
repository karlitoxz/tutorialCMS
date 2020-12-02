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

	//Mostar articulo y categorias con inner join
		static public function mdlMostrarConInnerJoin($tabla1,$tabla2){
			$stmt = Conexion::conectar()-> prepare("SELECT $tabla1.*,$tabla2.*,DATE_FORMAT(fecha_Articulo,'%d.%m.%Y') as fecha_articulo FROM $tabla1 INNER JOIN $tabla2 ON $tabla1.id_categoria = $tabla2.id_cat ORDER BY $tabla2.id_articulo DESC");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt = null;
		}
}

?>