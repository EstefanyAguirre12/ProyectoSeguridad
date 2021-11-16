<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Contraseña");

require_once("../../app/controllers/dashboard/account/contracontroller.php");
Page::templateFooter();
?>