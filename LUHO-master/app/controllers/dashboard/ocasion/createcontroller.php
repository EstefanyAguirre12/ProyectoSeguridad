<?php
require_once("../../app/models/ocasion.class.php");
try{
    //Este es el codigo para crear una nueva ocasion
    $ocasion = new Ocasion;
    if(isset($_POST['crear'])){
        $_POST = $ocasion->validateForm($_POST);
        if($ocasion->setNombre($_POST['Nombre'])){
            if($ocasion->createOcasion()){
                Page::showMessage(1, "Ocasion creada", "index.php");
            }else{
                throw new Exception(Database::getException());
            }
        }else{
            throw new Exception("Nombre incorrecto");
        }
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/ocasion/createview.php");
?>

