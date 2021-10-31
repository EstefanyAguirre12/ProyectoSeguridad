<!-- Este es el formulario para buscar una ocasion-->
<div class="container margent"> 
	<div class="row">	
		<div class="col-md-12">
			<form method='post'>
				<div class="row">	
					<div class="form-group col-md-4">
						<input type="text" name ="Buscar" class="form-control validate" id="buscar" placeholder="Buscar" >
						<label for="buscar" class="col-lg-2 control-label"></label>
            		</div>
					<div class="form-group col-md-4">
						<button type='submit' name='buscar' class='btn btn-grey btn-rounded mr-md-3 z-depth-1a'><i class='deco-none'>Buscar</i></button>
					</div>
					<div class="form-group col-md-4">
						<a href="create.php" class="btn btn-dark btn-rounded mr-md-3 z-depth-1a lf" >Agregar</a>
					</div>
				</div>			
			</form>
	
		</div>
	</div>
</div>

<div class="container text-center margenb" >
	<div class="px-4">
		<div class="table-wrapper">
			<!--Table-->
			<table class="table" ><!-- if using bootstrap this auto creates-->
				<thead>
					<tr>
						<th>Ocasion</th>
						<th>Modificar</th>							
						<th>Eliminar</th>	
					</tr>
				</thead>
				<tbody>
					<?php
						function base64_url_encode($input){
							$default = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
							$custom  = "ZYXWVUTSRQPONMLKJIHGFEDCBAzyxwvutsrqponmlkjihgfedcba9876543210+/";
							return strtr(base64_encode($input), $default, $custom );
						}
						foreach($data as $row){
						$id=base64_url_encode($row['IdOcasion']);
						print("
						<tr>
							<td>$row[Ocasion]</td>
							<td>
							<a href='update.php?id=$id' class='btn btn-grey btn-rounded mr-md-3 z-depth-1a'><i class='fas fa-pencil-alt'></i></a>
							</td> <!--look on bootstrap for sizes-->	
							<td>
							<a href='delete.php?id=$id' class='btn btn-grey btn-rounded mr-md-3 z-depth-1a'><i class='fas fa-trash-alt'></i></a>
							</td> <!--look on bootstrap for sizes-->
						<tr>
						");
						}
					?>												
				</tbody>
			</table>
			<!--Table-->
		</div>
	</div>				
</div>

    
