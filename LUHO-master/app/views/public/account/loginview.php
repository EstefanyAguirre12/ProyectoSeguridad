<div class="font-cover" id="login">
	<div class="wrapper">
		<div class="containerlogin">
			<h1>Bienvenid@</h1>	
			<form method="post" class="form">
			<input type="text" name ="Usuario" class="form-control validate" id="usuario" autocomplete="off" placeholder="Usuario" value="<?php print($object->getUsuario()) ?>" required/>
			<label for="usuario" class="col-lg-2 control-label"></label>
			
			<input type="password" name ="Clave" class="form-control validate" id="contra" placeholder="Contraseña" value="<?php print($object->getContrasena()) ?>" required/>
			<label for="contra" class="col-lg-2 control-label"></label>
			<div class="text-center">

			<a href="registro.php" class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" >Registrarse</a>
			<button type='submit' name='iniciar' class='btn btn-grey btn-rounded mr-md-3 z-depth-1a'><i class='material-icons'>Iniciar Sesion</i></button>
			<a href="recuperar.php" class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" >Recuperar contraseña</a>

		</div>
		</form>
		</div>	
	</div>
</div>
