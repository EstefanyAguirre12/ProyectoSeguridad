<!-- Este es el formulario para crear un producto -->
<form method='post' enctype='multipart/form-data'>
    <div class="container registeer cuenta"> 
        <div class="col-sm-12 text-center">
    
            <div class="row">
                <div class="form-group col-md-6">
                    <input type="text" name ="Nombre" class="form-control validate" id="nombre" placeholder="Nombre" autocomplete="off" maxlength="70" onkeypress="return alpha(event)" value="<?php print($producto->getNombre()) ?>" required/>
                    <label for="nombre" class="col-lg-2 control-label"></label>
                    <input type="text" name ="Descripcion" class="form-control validate" id="descripcion" placeholder="Descripcion" autocomplete="off" maxlength="70" onkeypress="return alpha(event)" value="<?php print($producto->getDescripcion()) ?>" required/>
                    <label for="descripcion" class="col-lg-2 control-label"></label>
                    <input type="text" name ="Cantidad" class="form-control validate" id="cantidad" placeholder="Cantidad" autocomplete="off" maxlength="10" onkeypress="return numeric(event)" value="<?php print($producto->getCantidad()) ?>" required/>
                    <label for="cantidad" class="col-lg-2 control-label"></label>
                </div>
                <div class="form-group col-md-6">
                    <input type="text" name ="Modelo" class="form-control validate" id="modelo" placeholder="Modelo" autocomplete="off" maxlength="70" onkeypress="return alpha(event)" value="<?php print($producto->getModelo()) ?>" required/>
                    <label for="modelo" class="col-lg-2 control-label"></label>
                    <input type="text" name ="Costo" class="form-control validate" id="costo" placeholder="Costo" autocomplete="off" maxlength="10" onkeypress="return num(event)" value="<?php print($producto->getCosto()) ?>" required/>
                    <label for="costo" class="col-lg-2 control-label"></label>
                    <?php
                    Page::showSelect("Marca", "Marca", $producto->getIdmarca(), $producto->getMarca());
                    ?>
                </div>
                <div class="form-group col-md-6">
                <?php
                    Page::showSelect("Categoria", "Categoria", $producto->getIdcategoria(), $producto->getCategoria());
                    ?>
                    <?php
                    Page::showSelect("Ocasion", "Ocasion", $producto->getIdocasion(), $producto->getOcasion());
                    ?>
                </div>
                <div class="form-group col-md-6">
                <?php
                    Page::showSelect("Material", "Material", $producto->getIdmaterial(), $producto->getMaterial());
                    ?>
                    <?php
                    Page::showSelect("Talla", "Talla", $producto->getIdTalla(), $producto->getTallas());
                    ?>
                    <button type="submit" name="crear" class="btn btn-dark btn-rounded mr-md-3 z-depth-1a lf"><i class="deco-none">Agregar</i></button>
                    <a href="index.php" class="btn btn-grey btn-rounded mr-md-3 z-depth-1a space" >Cancelar</a>
                </div>
            </div>    
        </div>    
             
    </div>
</form>






                



