<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Contraseña");
print("
            <nav class='navbar navbar-expand-lg navbar-dark bg-dark fixed-top'>
                <a class='navbar-brand' href=''>LUHO</a>
                <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                </button>
                <div class='collapse navbar-collapse' id='navbarNav'>
                    
                </div>
            </nav>
			");
require_once("../../app/controllers/dashboard/account/cambiarcontracontroller.php");
Page::templateFooter();
?>