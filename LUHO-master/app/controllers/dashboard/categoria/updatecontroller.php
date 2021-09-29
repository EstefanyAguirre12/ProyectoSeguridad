<?php
require_once("../../app/models/categoria.class.php");
try{
    //Aqui va el codigo para Modificar una categoria 
    if(isset($_GET['id'])){
        $categoria = new Categoria;
        if($categoria->setId($_GET['id'])){
            if($categoria->readCategoria()){
                if(isset($_POST['modificar'])){
                    $_POST = $categoria->validateForm($_POST);
                    if($categoria->setNombre($_POST['Nombre'])){
                        if($categoria->setGenero($_POST['Genero'])){

                        if($categoria->updateCategoria()){
                            Page::showMessage(1, "Ocasion modificada", "index.php");
                        }else{
                            throw new Exception(Database::getException());
                        }
                    }else{
                        throw new Exception("Genero incorrecto");
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
require_once("../../app/views/dashboard/categoria/updateview.php");
?>

