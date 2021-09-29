<?php
require_once("../../app/models/material.class.php");
try{
	//Este es el codigo para buscar un material
	$material = new Material;
	if(isset($_POST['buscar'])){
		$_POST = $material->validateForm($_POST);
		$data = $material->searchMaterial($_POST['Buscar']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $material->getMaterial();
		}
	}else{
		$data = $material->getMaterial();
	}
	if($data){
		require_once("../../app/views/dashboard/material/indexview.php");
	}else{
		Page::showMessage(3, "No hay materiales disponibles", "create.php");
	}
	
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}

?>