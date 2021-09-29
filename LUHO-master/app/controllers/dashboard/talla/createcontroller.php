<?php
require_once("../../app/models/talla.class.php");
try{
    //Este es el codigo para crear una nueva talla
    $talla = new Talla;
    if(isset($_POST['crear'])){
        $_POST = $talla->validateForm($_POST);
        if($talla->setNombre($_POST['Nombre'])){ 
            if($talla->createTalla()){
                Page::showMessage(1, "Se creo la talla", "index.php");
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
require_once("../../app/views/dashboard/talla/createview.php");
?>