<?php
require_once("../../app/models/categoria.class.php");
try{
    //Aqui va el codigo para crear una nueva categoria
    $categoria = new Categoria;
        if(isset($_POST['crear'])){
            $_POST = $categoria->validateForm($_POST);
                if($categoria->setNombre($_POST['Nombre'])){
                    if($categoria->setGenero($_POST['Genero'])){
                         if($categoria->createCategoria()){
                            Page::showMessage(1, "Categoria creada", "index.php");
            }else{
                throw new Exception(Database::getException());
            }
        }else{
            throw new Exception("Genero Incorrecto ");
        }
    }else{
        throw new Exception("Nombre incorrecto");
    }
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/categoria/createview.php");
?>

