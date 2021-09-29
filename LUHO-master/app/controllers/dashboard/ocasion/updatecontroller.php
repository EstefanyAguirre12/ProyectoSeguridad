<?php
require_once("../../app/models/ocasion.class.php");
try{
    //Este es el codigo para modificar una ocasion
    if(isset($_GET['id'])){
        $ocasion = new Ocasion;
        if($ocasion->setId($_GET['id'])){
            if($ocasion->readOcasion()){
                if(isset($_POST['modificar'])){
                    $_POST = $ocasion->validateForm($_POST);
                    if($ocasion->setNombre($_POST['Nombre'])){
                        if($ocasion->updateOcasion()){
                            Page::showMessage(1, "Ocasion modificada", "index.php");
                        }else{
                            throw new Exception(Database::getException());
                        }
                    }else{
                        throw new Exception("Nombre incorrecto");
                    }
                }
            }else{
                Page::showMessage(2, "Ocasion inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Ocasion incorrecta", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione ocasion", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/ocasion/updateview.php");
?>

