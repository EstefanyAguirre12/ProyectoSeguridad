<?php
require_once("../../app/models/tipoenvio.class.php");
try{
    //Este es el codigo para crear un nuevo tipo de envio
    $tipoenvio = new Tipoenvio;
    if(isset($_POST['crear'])){
        $_POST = $tipoenvio->validateForm($_POST);
        if($tipoenvio->setNombre($_POST['Nombre'])){ 
            if($tipoenvio->createTipoenvio()){
                Page::showMessage(1, "Se creo el tipo de envio", "index.php");
            }else{
                throw new Exception(Database:: getException());

            }      
        }else{
            throw new Exception("Nombre incorrecto");
        }        
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/tipoenvio/createview.php");
?>