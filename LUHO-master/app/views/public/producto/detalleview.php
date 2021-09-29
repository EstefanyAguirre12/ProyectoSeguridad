<div class="row margendet">
	<?php
        print("
		<div class='col-lg-5'>
			<!--Carousel Wrapper-->
			<div class='carousel-inner'>
                <div class='carousel-item active text-center'>
                <img src='../../web/img/productos/".$producto->getImg()."' class='img-fluid' alt='photo'>
				</div>                                  
			</div>
		</div>								
		<div class='col-lg-3'>
			<h2 class='h2-responsive product-name'><strong>".$producto->getNombre()."</strong></h2>
			<h4 class='h4-responsive'><span class='green-text'><strong>".$producto->getCosto()."</strong></span> 
			<span class='grey-text'><small><s>$89</s></small></span></h4>
			<h4 class='h4-responsive'><strong>Descripcion</strong></h4>
			<p>".$producto->getDescripcion()."</p>
			<h4 class='h4-responsive'><strong>Modelo</strong></h4>
			<p>".$producto->getModelo()."</p>
			<h4 class='h4-responsive'><strong>Marca</strong></h4>
            <p>".$producto->getIdmarca()."</p>
            <form method='post'>
            <input id='cantidad' type='number' name='valoracion' min='1' max='5' class='validate'>
            <button type='submit' name='valor' class='btn btn-grey btn-rounded mr-md-3 z-depth-1a' data-toggle='tooltip' title='Califica el poroducto'><i class='material-icons'>Calificar</i></button>
        </form>
		</div>
		<div class='col-lg-3'>
			<h4 class='h4-responsive'><strong>Ocasion</strong></h4>
			<p>".$producto->getIdocasion()."</p>
			<h4 class='h4-responsive'><strong>Material</strong></h4>
			<p>".$producto->getIdmaterial()."</p>
			<h4 class='h4-responsive'><strong>Talla</strong></h4>
            <p>".$producto->getIdtalla()."</p>
			<h4 class='h4-responsive'><strong>Cantidad</strong></h4>
            <form method='post'>
            <input id='cantidad' type='number' name='cantidad' min='1' max='".$producto->getCantidad()."' class='validate'>
            <label for='cantidad'>Compra esta limitada a ".$producto->getCantidad()." piezas</label>
            <button type='submit' name='agregar' class='btn btn-grey btn-rounded mr-md-3 z-depth-1a' data-toggle='tooltip' title='Agregar al carrito'><i class='material-icons'>Agregar</i></button>
            </form>
            </div>
                            
        ");
       
        ?>
		
</div>
<!-- /row -->
                <div class="container">
                    <div class="text-center">
                        <h3>Seccion de Comentarios</h3>
                    </div>
                    <form method='post'>

                    <div class="md-form">
                    
					<input type="text" name ="coment" class="form-control validate" id="com" placeholder="Deja aqui tu comentario"  value="<?php print($coment->getComentario()) ?>" required/>
                        <label for="com" class="col-lg-2 control-label"></label>
                        <button type='submit' name='comentario' class='btn btn-grey btn-rounded mr-md-3 z-depth-1a' data-toggle='tooltip' title='Agregar al carrito'><i class='material-icons'>Agregar</i></button>
                    
                    </div>
                    </form>

                    <div class="card">
                        <div class="card-body">
                            <div class="scroll-comments">    
                                <!--Main wrapper-->
                                <div class="comments-list text-left">
                                    <!--First row-->
                            <?php 
                            foreach($comenta as $coment){
                                print("
                                <div class='row'>    
                                <!--Content column-->
                                <div class='col-sm-10 col-12'>
                                    <a><h3 class='user-name'> $coment[Usuario]</h3></a>
                                    
                                    <p class='comment-text'>$coment[Comentario]</p>
                                </div>
                                <!--/.Content column-->
                            </div>
                                ");
                            }

                                 ?>
                                    
 
                               
                                </div>
                                <!--/.Main wrapper-->
                            </div>
                        </div>
                    </div>
                </div>