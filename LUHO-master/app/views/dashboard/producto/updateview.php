<!-- Este es el formulario para modificar un producto -->
<form method='post' enctype='multipart/form-data'>
    <div class="container registeer cuenta">  
        <div class="col-sm-12 text-left">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="nombre" class="lb">Nombre:</label>
                    <input type="text" name ="Nombre" class="form-control validate" id="nombre" placeholder="Nombre" autocomplete="off" maxlength="70" onkeypress="return alpha(event)" value="<?php print($producto->getNombre()) ?>" required/>
                    <label for="nombre" class="col-lg-2 control-label"></label>
                </div>
                <div class="form-group col-md-6">
                    <label for="modelo" class="lb">Modelo:</label>
                    <input type="text" name ="Modelo" class="form-control validate" id="modelo" placeholder="Modelo" autocomplete="off" maxlength="70" onkeypress="return alpha(event)" value="<?php print($producto->getModelo()) ?>" required/>
                    <label for="modelo" class="col-lg-2 control-label"></label>
                </div>
                <div class="form-group col-md-6">
                    <label for="descripcion" class="lb">Descripción:</label>
                    <input type="text" name ="Descripcion" class="form-control validate" id="descripcion" placeholder="Descripcion" autocomplete="off" maxlength="70" onkeypress="return alpha(event)" value="<?php print($producto->getDescripcion()) ?>" required/>
                    <label for="descripcion" class="col-lg-2 control-label"></label>
                </div>
                <div class="form-group col-md-6">
                    <label for="nombre" class="lb">Costo:</label>
                    <input type="text" name ="Costo" class="form-control validate" id="costo" placeholder="Costo" autocomplete="off" maxlength="10" onkeypress="return num(event)" value="<?php print($producto->getCosto()) ?>" required/>
                    <label for="costo" class="col-lg-2 control-label"></label>
                </div>
                <div class="form-group col-md-6">
                    <label for="nombre" class="lb">Cantidad:</label>
                    <input type="text" name ="Cantidad" class="form-control validate" id="cantidad" placeholder="Cantidad" autocomplete="off" maxlength="10" onkeypress="return numeric(event)" value="<?php print($producto->getCantidad()) ?>" required/>
                    <label for="cantidad" class="col-lg-2 control-label"></label>
                </div>
                <div class="form-group col-md-6">
                    <label for="nombre" class="lb">Marca:</label>
                    <?php
                    Page::showSelect("Marca", "Marca", $producto->getIdmarca(), $producto->getMarca());
                    ?>
                </div>
                <div class="form-group col-md-6">
                    <label for="nombre" class="lb">Categoria:</label>
                    <?php
                    Page::showSelect("Categoria", "Categoria", $producto->getIdcategoria(), $producto->getCategoria());
                    ?>
                </div>
                <div class="form-group col-md-6">
                    <label for="nombre" class="lb">Material:</label>
                    <?php
                    Page::showSelect("Material", "Material", $producto->getIdmaterial(), $producto->getMaterial());
                    ?>
                </div>
                <div class="form-group col-md-6">
                    <label for="nombre" class="lb">Ocasión:</label>
                    <?php
                    Page::showSelect("Ocasion", "Ocasion", $producto->getIdocasion(), $producto->getOcasion());
                    ?>
                </div>
                <div class="form-group col-md-6">
                    <label for="nombre" class="lb">Talla:</label>
                    <?php
                    Page::showSelect("Talla", "Talla", $producto->getIdTalla(), $producto->getTallas());
                    ?>
                </div>
                <div class="form-group col-md-6 tp">
                    <button type="submit" name="modificar" class="btn btn-dark btn-rounded z-depth-1a lf"><i class="deco-none">Modificar</i></button>
                    <a href="index.php" class="btn btn-grey btn-rounded z-depth-1a space" >Cancelar</a>
                </div>
            </div>    
        </div>               
    </div>
</form>






                



