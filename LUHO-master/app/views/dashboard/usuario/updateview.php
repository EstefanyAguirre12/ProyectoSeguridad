<form method='post'>
<!-- Este es el formulario para modificar un usuario -->
    <div class="container registeer cuenta">   
        <div class="row">
            <div class="form-group col-md-6">
                <label for="nombre" class="lb">Nombre:</label>
                <input type="text" name ="Nombre" class="form-control validate" id="nombre" placeholder="Nombre" autocomplete="off" maxlength="70" onkeypress="return alpha(event)" value="<?php print($usuario->getNombre()) ?>" required/>
                <label for="nombre" class="col-lg-2 control-label"></label>
                <label for="usuario" class="lb">Usuario:</label>
                <input type="text" name ="Usuario" class="form-control validate" id="usuario" autocomplete="off" maxlength="70" onkeypress="return alpha(event)" placeholder="Usuario" value="<?php print($usuario->getUsuario()) ?>" required/>
                <label for="usuario" class="col-lg-2 control-label"></label>
                <label for="select-el" class="combo-label">Tipo de usuario: </label>
                <?php
                    Page::showSelect("Tipo de Usuario", "TUsuario", $usuario->getTipousuario(), $usuario->getGeneros());
                    ?>
            </div>
            <div class="form-group col-md-6">
                <label for="apellido" class="lb">Apellido:</label>
                <input type="text" name ="Apellido" class="form-control validate" id="apellido" placeholder="Apellido" autocomplete="off" maxlength="70" onkeypress="return alpha(event)" value="<?php print($usuario->getApellido()) ?>" required/>
                <label for="apellido" class="col-lg-2 control-label"></label>
                <label for="email" class="lb">Email:</label>
                <input type="email" name ="Correo" class="form-control validate" id="email" autocomplete="off" placeholder="Correo" value='<?php print($usuario->getCorreo()) ?>' required/>
                <label for="email" class="col-lg-2 control-label"></label>
                <label for="direccion" class="lb">Dirección:</label>
                <input type="text" name ="Direccion" class="form-control validate" autocomplete="off" id="direccion" placeholder="Direccón" autocomplete="off" maxlength="70" onkeypress="return alpha(event)" value='<?php print($usuario->getDireccion()) ?>' required/>
                <label for="direccion" class="col-lg-2 control-label"></label>
                <button type="submit" name="modificar" class="btn btn-dark btn-rounded z-depth-1a lf"><i class="deco-none">Modificar</i></button>
                <a href="index.php" class="btn btn-grey btn-rounded z-depth-1a space" >Cancelar</a>
            </div>
        </div>  
    </div>
</form>