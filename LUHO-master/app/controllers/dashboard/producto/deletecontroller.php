<?php
require_once("../../app/models/producto.class.php");
try{
	//Este es el codigo para eliminar un producto
	function base64_url_decode($input){
        $default = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
        $custom  = "ZYXWVUTSRQPONMLKJIHGFEDCBAzyxwvutsrqponmlkjihgfedcba9876543210+/";
        return base64_decode(strtr($input, $custom, $default ));
    }
	$iddecode=$_GET['id'];
	if(isset($_GET['id'])){
		$iddecode=base64_url_decode($iddecode);
		$producto = new Producto;
		if($producto->setId($iddecode)){
			if($producto->readProducto()){
				if(isset($_POST['eliminar'])){
					if($producto->deleteProducto()){
                        Page::showMessage(1, "Producto eliminado", "index.php");
					}else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Producto inexistente");
			}
		}else{
			throw new Exception("Producto incorrecta");
		}
	}else{
		Page::showMessage(3, "Seleccione Producto", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/producto/deleteview.php");
?>