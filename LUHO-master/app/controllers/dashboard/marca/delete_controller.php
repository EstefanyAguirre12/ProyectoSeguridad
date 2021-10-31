<?php
require_once("../../app/models/marca.class.php");
try{
	//este es el codigo para eliminar una marca
	function base64_url_decode($input){
        $default = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
        $custom  = "ZYXWVUTSRQPONMLKJIHGFEDCBAzyxwvutsrqponmlkjihgfedcba9876543210+/";
        return base64_decode(strtr($input, $custom, $default ));
    }
	$iddecode=$_GET['id'];
	if(isset($_GET['id'])){
		$iddecode=base64_url_decode($iddecode);
		$marca = new Marca;
		if($marca->setId($iddecode)){
			if($marca->readMarca()){
				if(isset($_POST['eliminar'])){
					if($marca->deleteMarca()){
                        Page::showMessage(1, "Marca eliminada", "index.php");
					}else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Marca inexistente");
			}
		}else{
			throw new Exception("Marca incorrecta");
		}
	}else{
		Page::showMessage(3, "Seleccione marca", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/marca/delete_view.php");
?>