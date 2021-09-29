<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Marca");

require_once("../../app/controllers/dashboard/marca/delete_controller.php");
Page::templateFooter();
?>