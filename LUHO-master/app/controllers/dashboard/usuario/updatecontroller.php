<?php
require_once("../../app/models/usuario.class.php");
try{
    //Este es el codigo para modificar un usuario
    function base64_url_decode($input){
        $default = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
        $custom  = "ZYXWVUTSRQPONMLKJIHGFEDCBAzyxwvutsrqponmlkjihgfedcba9876543210+/";
        return base64_decode(strtr($input, $custom, $default ));
    }
    $iddecode=$_GET['id'];
    if(isset($_GET['id'])){
        $iddecode=base64_url_decode($iddecode);
        $usuario = new Usuario;
        if($usuario->setId($iddecode)){
            if($usuario->readUsuario()){
                if(isset($_POST['modificar'])){
                    $_POST = $usuario->validateForm($_POST);
                    if($usuario->setNombre($_POST['Nombre'])){
                        if($usuario->setApellido($_POST['Apellido'])){
                            if($usuario->setTipousuario($_POST['TUsuario'])){
                                if($usuario->setCorreo($_POST['Correo'])){
                                    if($usuario->setUsuario($_POST['Usuario'])){
                                        if($usuario->setDireccion($_POST['Direccion'])){
                                            if($usuario->updateUsuario()){
                                                Page::showMessage(1, "Usuario moficado", "index.php");
                                            }else{
                                                throw new Exception(Database::getException());
                                            }
                                        }else{
                                            throw new Exception("Direccion incorrecta");
                                        }
                                    }else{
                                        throw new Exception("Usuario incorrecto");
                                    }
                                }else{
                                    throw new Exception("Correo incorrecto");
                                }
                            }else{
                                throw new Exception("Tipo usuario incorrecto");
                            }
                        }else{
                            throw new Exception("Apellidos incorrectos");
                        }
                    }else{
                        throw new Exception("Nombres incorrectos");
                    }
                }
            }else{
                Page::showMessage(2, "Usuario inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Usuario incorrecta", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione Usuario", "index.php");
    }

}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/usuario/updateview.php");
?>