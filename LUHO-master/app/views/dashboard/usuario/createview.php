<!-- Este es el formulario para tu cuenta -->
<form method='post'>
    <div class="container registeer cuenta">   
        <div class="col-sm-12 text-center">
            <h1 class="text-center" >Registrar empleado</h1>
            <div class="row">
        
                <div class="form-group col-md-6">
                    <input type="text" name ="Nombre" class="form-control validate" id="nombre" placeholder="Nombre" value="<?php print($usuario->getNombre()) ?>" required/>
                    <label for="nombre" class="col-lg-2 control-label"></label>
                    <input type="text" name ="Usuario" class="form-control validate" id="usuario" placeholder="Usuario" autocomplete="off" value="<?php print($usuario->getUsuario()) ?>" required/>
                    <label for="usuario" class="col-lg-2 control-label"></label>
                    <input type="password" name ="clave1" class="form-control validate" id="contrasena1" placeholder="Contraseña" value="<?php print($usuario->getContrasena()) ?>" required/>
                    <label for="contrasena1" class="col-lg-2 control-label"></label>
                    <?php
                    Page::showSelect("Tipo de Usuario", "TUsuario", $usuario->getTipousuario(), $usuario->getGeneros());
                    ?>
                </div>
                <div class="form-group col-md-6">
                    <input type="text" name ="Apellido" class="form-control validate" id="apellido" placeholder="Apellido" value="<?php print($usuario->getApellido()) ?>" required/>
                    <label for="apellido" class="col-lg-2 control-label"></label>
                    <input type="email" name ="Correo" class="form-control validate" id="email" placeholder="Correo" autocomplete="off" value='<?php print($usuario->getCorreo()) ?>' required/>
                    <label for="email" class="col-lg-2 control-label"></label>
                    <input type="password" name ="clave2" class="form-control validate" id="contrasena2" placeholder="Contraseña" value="<?php print($usuario->getContrasena()) ?>" required/>
                    <label for="contrasena2" class="col-lg-2 control-label"></label>
                    <input type="text" name ="Direccion" class="form-control validate" id="direccion" placeholder="Direccón" autocomplete="off" value='<?php print($usuario->getDireccion()) ?>' required/>
                    <label for="direccion" class="col-lg-2 control-label"></label>
                    <a href="index.php" class="btn btn-grey btn-rounded z-depth-1a" >Cancelar</a>
                    <button type="submit" name="crear" class="btn btn-dark btn-rounded z-depth-1a lf"><i class='deco-none'>Agregar</i></button>
                </div>
            </div>
        </div>          
    </div>
</form>



       