<?php
require_once("../../app/models/tipoenvio.class.php");
try{
    //Este es el codigo para modificar un tipo de envio
    if(isset($_GET['id'])){
        $tipoenvio = new Tipoenvio;
        if($tipoenvio->setId($_GET['id'])){
            if($tipoenvio->readTipoenvio()){
                if(isset($_POST['modificar'])){
                    $_POST = $tipoenvio->validateForm($_POST);
                    if($tipoenvio->setNombre($_POST['Nombre'])){
                        if($tipoenvio->updateTipoenvio()){
                            Page::showMessage(1, "tipo envio modificado", "index.php");
                        }else{
                            throw new Exception(Database::getException());
                        }
                    }else{
                        throw new Exception("Nombre incorrecto");
                    }
                }
            }else{
                Page::showMessage(2, "tipo envio inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "tipo envio incorrecta", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione un tipo envio", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/tipoenvio/updateview.php");
?>