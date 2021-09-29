<?php
require_once("../../app/models/producto.class.php");
try{
    //Este es el codigo para crear un nuevo producto
    $producto = new Producto;
    if(isset($_POST['crear'])){
        $_POST = $producto->validateForm($_POST);
        if($producto->setNombre($_POST['Nombre'])){
            if($producto->setModelo($_POST['Modelo'])){
                if($producto->setDescripcion($_POST['Descripcion'])){
                    if($producto->setCosto($_POST['Costo'])){
                        if($producto->setCantidad($_POST['Cantidad'])){
                            if($producto->setIdcategoria($_POST['Categoria']))
                                if($producto->setIdmarca($_POST['Marca'])){
                                    if($producto->setIdmaterial($_POST['Material'])){
                                        if($producto->setIdocasion($_POST['Ocasion'])){
                                            if($producto->setIdTalla($_POST['Talla'])){
                                                if(is_uploaded_file($_FILES['imag']['tmp_name'])){
                                                    if($producto->setImagen($_FILES['imag'])){
                                                        if($producto->createProducto()){
                                                            Page::showMessage(1, "Producto creado", "index.php");
                                                        }else{
                                                             if($producto->unsetImagen()){
                                                                 throw new Exception(Database::getException());
                                                             }else{
                                                                 throw new Exception("Elimine la imagen manualmente");
                                                             }
                                                        }     
                                                    }else{
                                                            throw new Exception($producto->getImageError());
                                                        }
                                                    }else{
                                                        throw new Exception("Seleccione una imagen");
                                                    } 
                                                }else{
                                                    throw new Exception("Talla incorrecto");
                                                }
                                            }else{
                                                throw new Exception("Ocasion incorrecto");
                                            }
                                        }else{
                                            throw new Exception("Material incorrecto");
                                        }
                                    }else{
                                        throw new Exception("Marca incorrecto");
                                    }
                                }else{
                                    throw new Exception("Cantidad incorrecto");
                                }
                            }else{
                                throw new Exception("Costo incorrecto");
                            }
                    }else{
                        throw new Exception("Descripcion incorrecta");
                    }
                }else{
                    throw new Exception("Modelo incorrecta");
                }
            }else{
                throw new Exception("Nombre incorrecto");
            }
        }
    
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/producto/createview.php");
?>

