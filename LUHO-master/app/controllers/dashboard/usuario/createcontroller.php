<?php
require_once("../../app/models/usuario.class.php");
try{
    //Aqui va todo el codigo para poder crear un nuevo usuario
    $usuario = new Usuario;
    if(isset($_POST['crear'])){
        $_POST = $usuario->validateForm($_POST);
        if($usuario->setNombre($_POST['Nombre'])){
            if($usuario->setApellido($_POST['Apellido'])){
                if($usuario->setCorreo($_POST['Correo'])){
                    if($usuario->setUsuario($_POST['Usuario'])){
                        if($usuario->setDireccion($_POST['Direccion'])){
                            if($usuario->setTipousuario($_POST['TUsuario'])){
                                if($_POST['clave1'] == $_POST['clave2']){
                                    if($_POST['clave1'] != $_POST['Usuario']){
                                        if($usuario->setContrasena($_POST['clave1'])){
                                            if($usuario->createUsuario()){
                                                Page::showMessage(1, "Usuario creado", "index.php");
                                            }else{
                                                throw new Exception(Database::getException());
                                            }
                                        }else{
                                            throw new Exception("Clave menor a 8 caracteres");
                                        }
                                    }else{
                                        throw new Exception("La clave no puede ser igual a tu Usuario");
                                    }
                                }else{
                                throw new Exception("Claves diferentes");
                            }
                            }else{
                                throw new Exception("Tipo usuario incorrecto");
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
                throw new Exception("Apellidos incorrectos");
            }
        }else{
            throw new Exception("Nombres incorrectos");
        }
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/account/registroview.php");
?>