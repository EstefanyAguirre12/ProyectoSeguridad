<?php
require_once("../../app/models/comentario.class.php");
try{
	$coment = new Comentario;
	if(isset($_POST['buscar'])){
		$_POST = $coment->validateForm($_POST);
		$data = $coment->searchMaterial($_POST['Buscar']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $coment->getComentarioss();
		}
	}else{
		$data = $coment->getComentarioss();
	}
	if($data){
		require_once("../../app/views/dashboard/comentarios/indexview.php");
	}else{
		Page::showMessage(3, "No hay comentarios disponibles", "../inicio/index.php");
	}
	
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}

?>