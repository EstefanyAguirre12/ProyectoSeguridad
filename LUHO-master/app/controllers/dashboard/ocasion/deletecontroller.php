<?php
require_once("../../app/models/ocasion.class.php");
try{
	//Este es el codigo para eliminar una ocasion
	function base64_url_decode($input){
        $default = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
        $custom  = "ZYXWVUTSRQPONMLKJIHGFEDCBAzyxwvutsrqponmlkjihgfedcba9876543210+/";
        return base64_decode(strtr($input, $custom, $default ));
    }
	$iddecode=$_GET['id'];
	if(isset($_GET['id'])){
		$iddecode=base64_url_decode($iddecode);
		$ocasion = new Ocasion;
		if($ocasion->setId($iddecode)){
			if($ocasion->readOcasion()){
				if(isset($_POST['eliminar'])){
					if($ocasion->deleteOcasion()){
                        Page::showMessage(1, "Ocasion eliminada", "index.php");
					}else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Categoría inexistente");
			}
		}else{
			throw new Exception("Categoría incorrecta");
		}
	}else{
		Page::showMessage(3, "Seleccione categoría", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/ocasion/deleteview.php");
?>