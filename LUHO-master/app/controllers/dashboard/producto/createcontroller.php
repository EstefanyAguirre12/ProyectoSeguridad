<?php
require_once("../../app/models/producto.class.php");
libxml_disable_entity_loader(false);
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
                                                if($producto->createProducto()){
                                                    Page::showMessage(1, "Producto creado", "index.php");
                                                } else{
                                                    throw new Exception("No se ha podio insertar el producto");
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

