<!-- Este es el formulario para modificar tu usuario-->
<form method='post'>
    <div class="container registeer cuenta">
    <h4 class='center-align black-text tb'>MI CUENTA</h4>     
        <div class="row">
            <div class="form-group col-md-6">
                <label for="" class="lb">Nombre:</label>
                <input type="text" name ="Nombre" class="form-control validate" id="nombre" placeholder="Nombre" autocomplete="off" maxlength="70" onkeypress="return alpha(event)" value="<?php print($usuario->getNombre()) ?>" required/>
                <label for="nombre" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <label for="" class="lb">Apellido:</label>
                <input type="text" name ="Apellido" class="form-control validate" id="apellido" placeholder="Apellido" autocomplete="off" maxlength="70" onkeypress="return alpha(event)" value="<?php print($usuario->getApellido()) ?>" required/>
                <label for="apellido" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <label for="" class="lb">Usuario:</label>
                <input type="text" name ="Usuario" class="form-control validate" id="usuario" placeholder="Usuario" autocomplete="off" maxlength="70" onkeypress="return alpha(event)" value="<?php print($usuario->getUsuario()) ?>" required disabled/>
                <label for="usuario" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <label for="" class="lb">Email:</label>
                <input type="email" name ="Correo" class="form-control validate" id="email" placeholder="Correo" autocomplete="off" value='<?php print($usuario->getCorreo()) ?>' required/>
                <label for="email" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <label for="" class="lb">Dirección:</label>
                <input type="text" name ="Direccion" class="form-control validate" id="direccion" placeholder="Direccón" autocomplete="off" maxlength="70" onkeypress="return alpha(event)" value='<?php print($usuario->getDireccion()) ?>' required/>
                <label for="direccion" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <button type="submit" name="modificar" class="btn btn-dark btn-rounded z-depth-1a lf tp"><i class="deco-none">Modificar</i></button>
                <a href="../inicio/index.php" class="btn btn-grey btn-rounded z-depth-1a space tp" >Cancelar</a>
            </div>
        </div>        
    </div>
</form>