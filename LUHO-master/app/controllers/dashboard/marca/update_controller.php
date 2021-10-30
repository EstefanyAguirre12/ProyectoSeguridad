<?php
require_once("../../app/models/marca.class.php");
try{
    //Este es el codigo para modificar una marca
    if(isset($_GET['id'])){
        $marca = new Marca;
        if($marca->setId($_GET['id'])){
            if($marca->readMarca()){
                if(isset($_POST['modificar'])){
                    $_POST = $marca->validateForm($_POST);
                    if($marca->setNombre($_POST['Nombre'])){
                        if($marca->updateMarca()){
                            Page::showMessage(1, "marca modificada", "index.php");
                        }else{
                            throw new Exception(Database::getException());
                        }
                    }else{
                        throw new Exception("Nombre incorrecto");
                    }
                }
            }else{
                Page::showMessage(2, "marca inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "marca incorrecta", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione marca", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/marca/update_view.php");
?>