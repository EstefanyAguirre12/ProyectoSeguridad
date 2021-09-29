<?php
require_once("../../app/models/usuario.class.php");
try{
    //Aqui va el codigo para modificar contrasenas
    if(isset($_POST['modificar'])){
        $usuario = new Usuario;
        $_POST = $usuario->validateForm($_POST);
        if($usuario->setId($_SESSION['IdUsuario'])){
            if($_POST['clave1'] == $_POST['clave2']){
                if($usuario->setContrasena($_POST['clave1'])){
                    if($_SESSION['Contrasena'] != $_POST['clave1']){
                        if($_POST['clave1'] == $_POST['clave2']){
                            if($_POST['clave1'] != $_SESSION['Usuario']){
                                if($_POST['clave1'] == $_POST['clave2']){
                                    if($usuario->setContrasena($_POST['clave1'])){
                                        if($usuario->changePassword()){
                                            Page::showMessage(1, "Clave cambiada", "../inicio/index.php");
                                        }else{
                                            throw new Exception(Database::getException());
                                        }
                                    }else{
                                        throw new Exception("Clave nueva menor a 8 caracteres");
                                    }
                                }else{
                                    throw new Exception("Claves diferentes");
                                }
                            }else{
                                throw new Exception("La clave no puede ser igual a tu Usuario");
                            }
                        }else{
                            throw new Exception("Claves nuevas diferentes");
                        }
                    }else{
                        throw new Exception("Clave actual igual a la clave nueva");
                    }
                }else{
                    throw new Exception("Clave menor a 8 caracteres");
                }
            }else{
                throw new Exception("Claves diferentes");
            }
        }else{
            Page::showMessage(2, "Usuario incorrecto", "index.php");
        }
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/account/contraview.php");
?>