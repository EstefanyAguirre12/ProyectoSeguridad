<?php
require_once("../../app/models/material.class.php");
try{
    //Este es el codigo para modificar un material
    if(isset($_GET['id'])){
        $material = new Material;
        if($material->setId($_GET['id'])){
            if($material->readMaterial()){
                if(isset($_POST['modificar'])){
                    $_POST = $material->validateForm($_POST);
                    if($material->setNombre($_POST['Nombre'])){
                        if($material->updateMaterial()){
                            Page::showMessage(1, "material modificado", "index.php");
                        }else{
                            throw new Exception(Database::getException());
                        }
                    }else{
                        throw new Exception("Nombre incorrecto");
                    }
                }
            }else{
                Page::showMessage(2, "material inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "material incorrecta", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione material", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/material/updateview.php");
?>