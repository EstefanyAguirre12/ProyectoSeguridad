<?php
require_once("../../app/models/tipoenvio.class.php");
try{
	//Este es el codigo para buscar un tipo de envio
	$tipoenvio = new Tipoenvio;
	if(isset($_POST['buscar'])){
		$_POST = $tipoenvio->validateForm($_POST);
		$data = $tipoenvio->searchTipoenvio($_POST['Buscar']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $tipoenvio->getTipoEnvio();
		}
	}else{
		$data = $tipoenvio->getTipoEnvio();
	}
	if($data){
		require_once("../../app/views/dashboard/tipoenvio/indexview.php");
	}else{
		Page::showMessage(3, "No hay tipos de envio disponibles", "create.php");
	}
	
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}

?>