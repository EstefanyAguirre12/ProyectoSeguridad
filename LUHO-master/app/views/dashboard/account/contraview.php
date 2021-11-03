<!-- Este es el formulario para modificar tu contrasena-->
<form method='post'>
    <div class="container registeer cuenta"> 
    <h4 class='center-align black-text'>CAMBIAR CONTRASEÑA</h4>  
        <div class="row">
            <div class="form-group col-md-6">
                <input type="password" name ="clave1" class="form-control validate" id="clave1" placeholder="Nueva contraseña" maxlength="70" onkeypress="return alpha(event)" >
                <label for="clave1" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="password" name ="clave2" class="form-control validate" id="clave2" placeholder="Verificar contraseña" maxlength="70" onkeypress="return alpha(event)" >
                <label for="clave2" class="col-lg-2 control-label"></label>
            </div>
        </div>  
        <a href="../inicio/index.php" class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" >Cancelar</a>
        <button type="submit" name="modificar" class="btn btn-dark btn-rounded mr-md-3 z-depth-1a"><i class="deco-none">Modificar</i></button>      
    </div>
</form>