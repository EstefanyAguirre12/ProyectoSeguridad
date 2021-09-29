<?php
require_once("../../app/models/cliente.class.php");
try{
	//Este es el codigo para buscar a un cliente
	$usuario = new Cliente;
	if(isset($_POST['buscar'])){
		$_POST = $usuario->validateForm($_POST);
		$data = $usuario->searchCliente($_POST['Buscar']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $usuario->getClientes();
		}
	}else{
		$data = $usuario->getClientes();
	}
	
	if($data){
		require_once("../../app/views/dashboard/cliente/indexview.php");
	}else{
		Page::showMessage(3, "No hay ocasiones disponibles", "create.php");
	}




}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}

?>