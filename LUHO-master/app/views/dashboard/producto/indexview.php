<!-- Este es el formulario para buscar un producto -->
<div class="container margent"> 
	<div class="row">	
		<div class="col-md-12">
			<form method='post'>
				<div class="row">	
					<div class="form-group col-md-4">
						<input type="text" name ="Buscar" class="form-control validate" id="buscar" placeholder="Buscar" >
						<label for="buscar" class="col-lg-2 control-label"></label>
            		</div>
					<div class="text-right">
						<button type='submit' name='buscar' class='btn btn-grey btn-rounded mr-md-3 z-depth-1a'><i class='material-icons'>Buscar</i></button>
						<a href="create.php" class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" >Agregar</a>
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
						<th>Nombre</th>
						<th>Modelo</th>
						<th>Descripcion</th>
						<th>Costo</th>
						<th>Categoria</th>	
						<th>Material</th>	
						<th>Marca</th>
						<th>Talla</th>
						<th>Ocasion</th>
						<th>Cantidad</th>
						<th>Valoracion</th>
						<th>Imagen</th>
						<th>Modificar</th>							
						<th>Eliminar</th>														
					</tr>
				</thead>
				<tbody>
					<?php
						foreach($data as $row){
						print("
						<tr>
							<td>$row[Nombre]</td>
							<td>$row[Modelo]</td>
							<td>$row[Descripcion]</td>
							<td>$row[Costo]</td>
							<td>$row[Categoria]</td>
							<td>$row[Material]</td>
							<td>$row[Marca]</td>
							<td>$row[Talla]</td>
							<td>$row[Ocasion]</td>
							<td>$row[Cantidad]</td>
							<td>$row[Valoracion]</td>
							<td><Img src='../../web/img/productos/$row[Img]' class='materialboxed' width='100' height='100'></td>
							<td>
							<a href='update.php?id=$row[IdProducto]' class='btn btn-grey btn-rounded mr-md-3 z-depth-1a'><i class='fas fa-pencil-alt'></i></a>
							</td> <!--look on bootstrap for sizes-->	
							<td>
							<a href='delete.php?id=$row[IdProducto]' class='btn btn-grey btn-rounded mr-md-3 z-depth-1a'><i class='fas fa-trash-alt'></i></a>
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


