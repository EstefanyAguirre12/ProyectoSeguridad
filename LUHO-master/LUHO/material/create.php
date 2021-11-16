<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Material");

require_once("../../app/controllers/dashboard/material/createcontroller.php");
Page::templateFooter();
?>