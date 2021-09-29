<?php
require_once("../../app/models/oferta.class.php");
try{
	//Este es el codigo para buscar una oferta
	$oferta = new Oferta;
	if(isset($_POST['buscar'])){
		$_POST = $oferta->validateForm($_POST);
		$data = $oferta->searchOferta($_POST['Buscar']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $oferta->getOferta();
		}
	}else{
		$data = $oferta->getOferta();
	}
	if($data){
		require_once("../../app/views/dashboard/oferta/indexview.php");
	}else{
		Page::showMessage(3, "No hay ofertas disponibles", "create.php");
	}
	
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}

?>