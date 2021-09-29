<form method="post">
<!-- Este es el formulario para modificar un tipo de envio -->
    <div class="container registeer cuenta">   
		<div class="col-sm-13 offset-sm-4 text-center">
			<div class="row">
            	<div class="form-group col-md-6">
				<label for="nombre">Nombre Envio</label>
					<input type="text" name ="Nombre" class="form-control validate" id="nombre" placeholder="Envio"  value="<?php print($tipoenvio->getNombre()) ?>" required/>
					<label for="nombre" class="col-lg-2 control-label"></label>
				</div>
				<div class="text-center">
				<a href="index.php" class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" >Cancelar</a>
				<button type="submit" name="modificar" class="btn btn-grey btn-rounded mr-md-3 z-depth-1a"><i class="material-icons">Modificar</i></button>
				</div>
			</div>    
		</div>
	</div>
</form>