<?php
require_once("../../app/models/ocasion.class.php");
try{
	//Este es el codigo para buscar una ocasion
	$ocasion = new Ocasion;
	if(isset($_POST['buscar'])){
		$_POST = $ocasion->validateForm($_POST);
		$data = $ocasion->searchOcasion($_POST['Buscar']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $ocasion->getOcasion();
		}
	}else{
		$data = $ocasion->getOcasion();
	}
	if($data){
		require_once("../../app/views/dashboard/ocasion/indexview.php");
	}else{
		Page::showMessage(3, "No hay ocasiones disponibles", "create.php");
	}
	
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}

?>