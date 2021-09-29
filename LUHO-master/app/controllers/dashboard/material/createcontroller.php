<?php
require_once("../../app/models/material.class.php");
try{
    //Este es el codigo para crear un nuevo material
    $material = new Material;
    if(isset($_POST['crear'])){
        $_POST = $material->validateForm($_POST);
        if($material->setNombre($_POST['Nombre'])){ 
            if($material->createMaterial()){
                Page::showMessage(1, "Se creo el material", "index.php");
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
require_once("../../app/views/dashboard/material/createview.php");
?>