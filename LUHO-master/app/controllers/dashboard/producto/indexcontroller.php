<?php
require_once("../../app/models/producto.class.php");
try{
	//Este es el codigo para buscar un producto
	$producto = new Producto;
	if(isset($_POST['buscar'])){
		$_POST = $producto->validateForm($_POST);
		$data = $producto->searchProducto($_POST['Buscar']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $producto->getProductos();
		}
	}else{
		$data = $producto->getProductos();
	}
	if($data){
		require_once("../../app/views/dashboard/producto/indexview.php");
	}else{
		Page::showMessage(3, "No hay ocasiones disponibles", "create.php");
	}
	
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}

?>