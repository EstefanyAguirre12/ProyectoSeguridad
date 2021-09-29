<?php
require_once("../../app/models/comentario.class.php");
try{
	if(isset($_GET['id'])){
		$coment = new Comentario;
		if($coment->setId($_GET['id'])){
			if($coment->readComentario()){
				if(isset($_POST['eliminar'])){
					if($coment->deleteComentario()){
                        Page::showMessage(1, "Material eliminada", "index.php");
					}else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Material inexistente");
			}
		}else{
			throw new Exception("Material incorrecto");
		}
	}else{
		Page::showMessage(3, "Seleccione Material", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/comentarios/deleteview.php");
?>