<?php
require_once("../../app/models/talla.class.php");
try{
	//Este es el codigo para eliminar una talla
	function base64_url_decode($input){
        $default = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
        $custom  = "ZYXWVUTSRQPONMLKJIHGFEDCBAzyxwvutsrqponmlkjihgfedcba9876543210+/";
        return base64_decode(strtr($input, $custom, $default ));
    }
	$iddecode=$_GET['id'];
	if(isset($_GET['id'])){
		$iddecode=base64_url_decode($iddecode);
		$talla = new Talla;
		if($talla->setId($iddecode)){
			if($talla->readTalla()){
				if(isset($_POST['eliminar'])){
					if($talla->deleteTalla()){
                        Page::showMessage(1, "Talla eliminada", "index.php");
					}else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Talla inexistente");
			}
		}else{
			throw new Exception("Talla incorrecta");
		}
	}else{
		Page::showMessage(3, "Seleccione talla", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/talla/deleteview.php");
?>