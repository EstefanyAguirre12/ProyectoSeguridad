<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Tipo Envio");

require_once("../../app/controllers/dashboard/tipoenvio/createcontroller.php");
Page::templateFooter();
?>