<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Producto");

require_once("../../app/controllers/dashboard/producto/indexcontroller.php");
Page::templateFooter();
?>