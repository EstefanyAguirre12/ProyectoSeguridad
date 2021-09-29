<?php
require_once("../../app/models/oferta.class.php");
try{
	//Este es el codigo para eliminar una oferta
	if(isset($_GET['id'])){
		$oferta = new Oferta;
		if($oferta->setId($_GET['id'])){
			if($oferta->readOferta()){
				if(isset($_POST['eliminar'])){
					if($oferta->deleteOferta()){
                        Page::showMessage(1, "Oferta eliminada", "index.php");
					}else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Oferta inexistente");
			}
		}else{
			throw new Exception("Oferta incorrecta");
		}
	}else{
		Page::showMessage(3, "Seleccione oferta", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/oferta/deleteview.php");
?>