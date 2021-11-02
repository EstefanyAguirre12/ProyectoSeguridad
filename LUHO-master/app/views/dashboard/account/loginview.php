	<!-- Este es el formulario para ingresar con tu cuenta-->
<div class="font-cover-login" id="login">
	<div class="wrapper">
		<div class="containerlogin">
			<h1>Bienvenid@</h1>	
			<form method="post" class="form">
				<input type="text" name ="Usuario" class="form-control validate" id="usuario" placeholder="Usuario" autocomplete="off" maxlength="70" onkeypress="return check(event)" value="<?php print($object->getUsuario()) ?>" required/>
				<label for="usuario" class="col-lg-2 control-label"></label>
				<input type="password" name ="Clave" class="form-control validate" id="contra" placeholder="Contraseña" maxlength="70" onkeypress="return check(event)" value="<?php print($object->getContrasena()) ?>" required/>
				<label for="contra" class="col-lg-2 control-label"></label>
				<div class="col text-center">
					<button type='submit' name='iniciar' class='btn btn-dark btn-rounded mr-md-3 z-depth-1a'><i class='deco-none'>Iniciar Sesión</i></button>
					<a href="recuperar.php" class="btn btn-dark btn-rounded mr-md-3 z-depth-1a" >Recuperar contraseña</a>
				</div>	
			</form>
		</div>	
	</div>
</div>
