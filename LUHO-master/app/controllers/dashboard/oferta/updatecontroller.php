<?php
require_once("../../app/models/oferta.class.php");
try{
    //Este es el codigo para modificar una oferta
    if(isset($_GET['id'])){
        $oferta = new Oferta;
        if($oferta->setId($_GET['id'])){
            if($oferta->readOferta()){
                if(isset($_POST['modificar'])){
                    $_POST = $oferta->validateForm($_POST);
                    if($oferta->setNombre($_POST['Nombre'])){
                        if($oferta->setDescuento($_POST['Descuento'])){
                            if($oferta->setIdProducto($_POST['Producto'])){
                        if($oferta->updateOferta()){
                            Page::showMessage(1, "oferta modificada", "index.php");
                        }else{
                            throw new Exception(Database::getException());
                        }
                    }else{
                        throw new Exception("Producto incorrecto");
                    }
                }else{
                    throw new Exception("Descuento incorrecto");
                }
            }else{
                throw new Exception("Nombre incorrecto");
            }
                }
            }else{
                Page::showMessage(2, "oferta inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "oferta incorrecta", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione una oferta", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/oferta/updateview.php");
?>