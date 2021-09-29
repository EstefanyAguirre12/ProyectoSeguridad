<?php
require_once("../../app/models/cliente.class.php");
try{
    //Este es el codigo para modificar a un cliente
    if(isset($_GET['id'])){
        $usuario = new Cliente;
        if($usuario->setId($_GET['id'])){
            if($usuario->readCliente()){
                if(isset($_POST['modificar'])){
                    $_POST = $usuario->validateForm($_POST);
                    if($usuario->setNombre($_POST['Nombre'])){
                        if($usuario->setApellido($_POST['Apellido'])){
                            if($usuario->setCorreo($_POST['Correo'])){
                                if($usuario->setUsuario($_POST['Usuario'])){
                                    if($usuario->setDireccion($_POST['Direccion'])){
                                        if($usuario->updateCliente()){
                                            Page::showMessage(1, "Cliente moficado", "index.php");
                                        }else{
                                            throw new Exception(Database::getException());
                                        }
                                    }else{
                                        throw new Exception("Direccion icorrecta");
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
require_once("../../app/views/dashboard/cliente/updateview.php");
?>