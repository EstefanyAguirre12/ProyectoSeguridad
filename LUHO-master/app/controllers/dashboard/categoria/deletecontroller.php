<?php
require_once("../../app/models/categoria.class.php");
try{
	//Aqui va el codigo para eliminar una categoria
	if(isset($_GET['id'])){
		$categoria = new Categoria;
		if($categoria->setId($_GET['id'])){
			if($categoria->readCategoria()){
				if(isset($_POST['eliminar'])){
					if($categoria->deleteCategoria()){
                        Page::showMessage(1, "Categoria eliminada", "index.php");
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
require_once("../../app/views/dashboard/categoria/deleteview.php");
?>