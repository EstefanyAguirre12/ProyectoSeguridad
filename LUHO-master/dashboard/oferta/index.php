<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Oferta");

require_once("../../app/controllers/dashboard/oferta/indexcontroller.php");
Page::templateFooter();
?>