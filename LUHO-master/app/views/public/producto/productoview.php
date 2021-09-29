
  
                 
<div class="container">

            
<?php
$categoria = $productos[0]['Categoria'];
print("<h1 class='text-center margenventas'>$categoria</h1>");
print("

<div class='row'>	
    <div class='col-md-12'>
        <form method='get'>
            <div class='row'>	
                <div class='form-group col-md-4'>
					<input type='text' name='id' class='d-none' id='id' value='".$_GET['id']."'>
					<input type='text' name='busqueda' class='form-control validate' id='busqueda' placeholder='Buscar por nombre' >
                    <label for='busqueda' class='col-lg-2 control-label'></label>
                </div>
                <div class='text-right'>
					<button type='submit' class='btn btn-grey btn-rounded mr-md-3 z-depth-1a'>Buscar</button>
                </div>
            </div>			
        </form>

    </div>
</div>
");
print("<section class=' pb-3'>");
print("<div class='row'>");
foreach($productos as $producto){
    print("
    <div class='col-lg-3 col-md-6 mb-r'>
			            <!--Card-->
			            <div class='card card-cascade narrower'>
			                <!--Card image-->
							<div class='view overlay hm-white-slight' >
							<img src='../../web/img/productos/$producto[Img]' class='img-fluid' alt=''>
			                    <a>
			                        <div class='mask'></div>
			                    </a>
			                </div>
			                <!--Card image-->
			                <!--Card content-->
			                <div class='card-body text-center'>
			                    <!--Category & Title-->
			                    <a  href='detalle.php?id=$producto[IdProducto]' class='grey-text'>
			                        <h3>$producto[Nombre]</h3>
			                    </a> 
			                    <h4>Calificacion</h4>
								<p class='card-text'>$producto[Valoracion]</p>

			                    <!--Description-->
			                    <p class='card-text'>$producto[Descripcion]</p>
			                    <!--Card footer-->
			                    <div class='card-footer'>
			                        <span class='left font-bold'>
			                            <strong>Precio $ $producto[Costo]</strong>
			                        </span>
			                    </div>
			                </div>
			                <!--Card content-->
			            </div>
			            <!--Card-->
			        </div>
			        <!--Grid column-->
        
	");

}
?>

    </div>
    </section>
</div>

 