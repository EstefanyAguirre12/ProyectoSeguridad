<?php
require_once("../../app/models/talla.class.php");
try{
	//Este es el codigo para buscar una talla
	$talla = new Talla;
	if(isset($_POST['buscar'])){
		$_POST = $talla->validateForm($_POST);
		$data = $talla->searchTalla($_POST['Buscar']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $talla->getTalla();
		}
	}else{
		$data = $talla->getTalla();
	}
	if($data){
		require_once("../../app/views/dashboard/talla/indexview.php");
	}else{
		Page::showMessage(3, "No hay tallas disponibles", "create.php");
	}
	
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}

?>