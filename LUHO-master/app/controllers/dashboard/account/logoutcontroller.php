<?php
require_once("../../app/models/usuario.class.php");
//Aqui va el codigo para cerrar sesion
$object = new Usuario;
if($object->logOut()){
    Page::showMessage(1, "Autenticación eliminada", "login.php");
}else{
    Page::showMessage(2, "Ocurrió un problema", "index.php");
}
?>