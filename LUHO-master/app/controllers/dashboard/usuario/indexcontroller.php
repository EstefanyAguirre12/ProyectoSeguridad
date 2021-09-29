<?php
require_once("../../app/models/usuario.class.php");
try{
	//Este es el codigo para buscar un usuario
	$usuario = new Usuario;
	if(isset($_POST['buscar'])){
		$_POST = $usuario->validateForm($_POST);
		$data = $usuario->searchUsuario($_POST['Buscar']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $usuario->getUsuarios();
		}
	}else{
		$data = $usuario->getUsuarios();
	}
	if($data){
		require_once("../../app/views/dashboard/usuario/indexview.php");
	}else{
		Page::showMessage(3, "No hay ocasiones disponibles", "create.php");
	}
	
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}

?>