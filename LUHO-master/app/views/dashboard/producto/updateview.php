<!-- Este es el formulario para modificar un producto -->
<form method='post' enctype='multipart/form-data'>
    <div class="container registeer cuenta">   
        <div class="row">
            <div class="form-group col-md-6">
                <input type="text" name ="Nombre" class="form-control validate" id="nombre" placeholder="Nombre" value="<?php print($producto->getNombre()) ?>" required/>
                <label for="nombre" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="text" name ="Modelo" class="form-control validate" id="modelo" placeholder="Modelo" value="<?php print($producto->getModelo()) ?>" required/>
                <label for="modelo" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="text" name ="Descripcion" class="form-control validate" id="descripcion" placeholder="Descripcion" value="<?php print($producto->getDescripcion()) ?>" required/>
                <label for="descripcion" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="text" name ="Costo" class="form-control validate" id="costo" placeholder="Costo" value="<?php print($producto->getCosto()) ?>" required/>
                <label for="costo" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="text" name ="Cantidad" class="form-control validate" id="cantidad" placeholder="Cantidad" value="<?php print($producto->getCantidad()) ?>" required/>
                <label for="cantidad" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <?php
                Page::showSelect("Categoria", "Categoria", $producto->getIdcategoria(), $producto->getCategoria());
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                Page::showSelect("Marca", "Marca", $producto->getIdmarca(), $producto->getMarca());
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                Page::showSelect("Material", "Material", $producto->getIdmaterial(), $producto->getMaterial());
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                Page::showSelect("Ocasion", "Ocasion", $producto->getIdocasion(), $producto->getOcasion());
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                Page::showSelect("Talla", "Talla", $producto->getIdTalla(), $producto->getTallas());
                ?>
            </div>
            <div class='form-group col-lg-6 center'>
                <label for='img'>Imagen de la marca</label>
                <input type='file' class='file' name ="imag" required/>
                <div class='input-group col-xs-12'>
                    <input type='text' class='form-control input-lg validate' placeholder='Imagen de la marca'/>
                    <span class='input-group-btn'>
                        <button class='browse btn btn-primary input-lg' type='button'>Subir</button>
                    </span>
                </div>
            </div>
            <a href="index.php" class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" >Cancelar</a>
            <button type="submit" name="modificar" class="btn btn-grey btn-rounded mr-md-3 z-depth-1a"><i class="material-icons">Agregar</i></button>
        </div>                
    </div>
</form>






                



