<!-- Este es el formulario para buscar a un cliente-->
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
						<th>Apellido</th>
						<th>Usuario</th>
						<th>Correo</th>	
						<th>Direccion</th>		
						<th>Editar</th>														
						<th>Eliminar</th>														
						<th>Grafico</th>																										
					</tr>
				</thead>
				<tbody>
					<?php
						foreach($data as $row){
							$id=null;
						print("
						<tr>
							<td>$row[Nombre]</td>
							<td>$row[Apellido]</td>
							<td>$row[Usuario]</td>
							<td>$row[Correo]</td>
							<td>$row[Direccion]</td>
							<td>
							<a href='update.php?id=$row[IdCliente]' class='btn btn-grey btn-rounded mr-md-3 z-depth-1a'><i class='fas fa-pencil-alt'></i></a>
							</td> <!--look on bootstrap for sizes-->	
							<td>
							<a href='delete.php?id=$row[IdCliente]' class='btn btn-grey btn-rounded mr-md-3 z-depth-1a'><i class='fas fa-trash-alt'></i></a>
							</td> <!--look on bootstrap for sizes-->
							<td>
							<a href='grafico.php?id=$row[IdCliente]'  class='btn btn-grey btn-rounded mr-md-3 z-depth-1a'><i class='fas fa-chart-pie'></i></a>
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
<!-- Modal -->
<div class="modal fade" id="Reporte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Elija una opción</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group input-field col s12 m6">
				<?php
										print("
				<a href= 'dsfd.php?ids=$id'  class='btn btn-dark' name='grafico' type='submit'>Categoria</a>
				<a href=''  class='btn btn-dark' name='grafico' type='submit'>Marca</a>
				<a href=''  class='btn btn-dark' name='grafico' type='submit'>Material</a>
				<a href=''  class='btn btn-dark' name='grafico' type='submit'>Ocasion</a>
				<a href=''  class='btn btn-dark' name='grafico' type='submit'>Talla</a>
					");
				?>

                </div>
            
        </div>
    </div>
</div>
<!-- Fin Modal de Contacto-->

