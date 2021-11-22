<?php
require_once("../../app/models/producto.class.php");
try{
    //Este es el codigo para modificar un producto
    function base64_url_decode($input){
        $default = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
        $custom  = "ZYXWVUTSRQPONMLKJIHGFEDCBAzyxwvutsrqponmlkjihgfedcba9876543210+/";
        return base64_decode(strtr($input, $custom, $default ));
    }
    $iddecode=$_GET['id'];
    if(isset($_GET['id'])){
        $iddecode=base64_url_decode($iddecode);
        $producto = new Producto;
        if($producto->setId($iddecode)){
            if($producto->readProducto()){
                if(isset($_POST['modificar'])){
                    $_POST = $producto->validateForm($_POST);
                    if($producto->setNombre($_POST['Nombre'])){
                        if($producto->setModelo($_POST['Modelo'])){
                            if($producto->setDescripcion($_POST['Descripcion'])){
                                    if($producto->setCosto($_POST['Costo'])){
                                        if($producto->setCantidad($_POST['Cantidad'])){         
                                            if($producto->setIdcategoria($_POST['Categoria'])){     
                                                if($producto->setIdmarca($_POST['Marca'])){
                                                    if($producto->setIdmaterial($_POST['Material'])){
                                                        if($producto->setIdocasion($_POST['Ocasion'])){
                                                            if($producto->setIdTalla($_POST['Talla'])){                              
                                                                if($producto->updateProductoImg()){
                                                                        Page::showMessage(1, "Producto modificado", "index.php");
                                                                    }else{
                                                                
                                                                    }
                                                            }else{
                                                                throw new Exception("Talla incorrecta");
                                                            }
                                                        }else{
                                                            throw new Exception("Ocasion incorrecta");
                                                        }
                                                    }else{
                                                        throw new Exception("Material incorrecta");
                                                    }
                                                }else{
                                                    throw new Exception("Marca incorrecta");
                                                }
                                            }else{
                                                throw new Exception("Categoria incorrecta");
                                            }
                                    }else{
                                        throw new Exception("Cantidad incorrecta");
                                    }
                                }else{
                                    throw new Exception("Costo incorrecto");
                                }
                            }else{
                                throw new Exception("Descripción incorrecta");
                            }
                        }else{
                            throw new Exception("Modelo incorrecta");
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
require_once("../../app/views/dashboard/producto/updateview.php");
?>

