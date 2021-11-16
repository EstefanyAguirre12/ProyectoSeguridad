<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("material");

require_once("../../app/controllers/dashboard/material/indexcontroller.php");
Page::templateFooter();
?>