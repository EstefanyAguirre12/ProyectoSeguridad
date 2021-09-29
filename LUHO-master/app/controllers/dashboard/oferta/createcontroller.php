<?php
require_once("../../app/models/oferta.class.php");
try{
    //Este es el codigo para crear una nueva oferta
    $oferta = new Oferta;
    if(isset($_POST['crear'])){
        $_POST = $oferta->validateForm($_POST);
        if($oferta->setNombre($_POST['Nombre'])){
            if($oferta->setDescuento($_POST['Descuento'])){
                if($oferta->setIdProducto($_POST['Producto'])){

            if($oferta->createOferta()){
                Page::showMessage(1, "Se creo la oferta", "index.php");
            }else{
                throw new Exception(Database:: getException());

            }      
        }else{
            throw new Exception("Nombre incorrecto");
        } 
    }else{
        throw new Exception("Nombre incorrecto");
    } }else{
        throw new Exception("Nombre incorrecto");
    }        
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/oferta/createview.php");
?>