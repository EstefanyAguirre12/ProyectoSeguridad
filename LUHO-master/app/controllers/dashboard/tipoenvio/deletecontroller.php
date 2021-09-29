<?php
require_once("../../app/models/tipoenvio.class.php");
try{
	//Este es el codigo para eliminar un tipo de envio
	if(isset($_GET['id'])){
		$tipoenvio = new Tipoenvio;
		if($tipoenvio->setId($_GET['id'])){
			if($tipoenvio->readTipoenvio()){
				if(isset($_POST['eliminar'])){
					if($tipoenvio->deleteTipoenvio()){
                        Page::showMessage(1, "Tipo Envio eliminado", "index.php");
					}else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Tipo Envio inexistente");
			}
		}else{
			throw new Exception("Tipo envio incorrecto");
		}
	}else{
		Page::showMessage(3, "Seleccione tipo envio", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/tipoenvio/deleteview.php");
?>