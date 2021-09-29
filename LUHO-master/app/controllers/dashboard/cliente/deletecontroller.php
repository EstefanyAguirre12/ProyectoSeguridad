<?php
require_once("../../app/models/cliente.class.php");
try{
	//Este es el codigo para eliminar un cliente
	if(isset($_GET['id'])){
		$usuario = new Cliente;
		if($usuario->setId($_GET['id'])){
			if($usuario->readCliente()){
				if(isset($_POST['eliminar'])){
					if($usuario->deleteCliente()){
                        Page::showMessage(1, "Cliente eliminado", "index.php");
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
require_once("../../app/views/dashboard/cliente/deleteview.php");
?>