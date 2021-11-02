<!-- Este es el formulario para crear una categoria -->
<form method="post">
    <div class="container registeer cuenta">   
		<div class="col-sm-13 offset-sm-4 text-center">
			<div class="row">
            	<div class="form-group col-md-6">
					<input type="text" name ="Nombre" class="form-control validate" id="nombre" placeholder="Categoria"  autocomplete="off" maxlength="70" onkeypress="return alpha(event)" value="<?php print($categoria->getNombre()) ?>" required/>
					<label for="nombre" class="col-lg-2 control-label"></label>
					<label for="select-el" class="combo-label">Genero: </label>
					<?php
						Page::showGeneros("Genero", "Genero", $categoria->getGenero(), $categoria->getGeneros());
					?>
					<div class="text-center">
						<a href="index.php" class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" >Cancelar</a>
						<button type="submit" name="crear" class="btn btn-dark btn-rounded mr-md-3 z-depth-1a"><i class='deco-none'>Agregar</i></button>
					</div>
				</div>				
				
			</div>
		</div>
	</div>          
</form>

