<?php
require_once("../../app/models/material.class.php");
try{
    //Este es el codigo para modificar un material
    function base64_url_decode($input){
        $default = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
        $custom  = "ZYXWVUTSRQPONMLKJIHGFEDCBAzyxwvutsrqponmlkjihgfedcba9876543210+/";
        return base64_decode(strtr($input, $custom, $default ));
    }
    $iddecode=$_GET['id'];
    if(isset($_GET['id'])){
        $iddecode=base64_url_decode($iddecode);
        $material = new Material;
        if($material->setId($iddecode)){
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