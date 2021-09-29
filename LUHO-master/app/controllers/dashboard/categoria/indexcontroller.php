<?php
require_once("../../app/models/categoria.class.php");
try{
	//Aqui va el codigo para buscar una categoria
	$categoria = new Categoria;
	if(isset($_POST['buscar'])){
		$_POST = $categoria->validateForm($_POST);
		$data = $categoria->searchCategoria($_POST['Buscar']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $categoria->getCategoria();
		}
	}else{
		$data = $categoria->getCategoria();
	}
	if($data){
		require_once("../../app/views/dashboard/categoria/indexview.php");
	}else{
		Page::showMessage(3, "No hay categorías disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}
?>