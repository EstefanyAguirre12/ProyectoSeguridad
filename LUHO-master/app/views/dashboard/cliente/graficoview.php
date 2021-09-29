<!-- Este es el formulario para eliminar un cliente-->
<div class="container margent"> 
	<div class="row">	
		<div class="col-md-12">
        	<form method='post'>
				<div class='row text-center'>
					<h4>Elija una opcion</h4>
					</div>
					<div class='row text-center'>

					<?php
					print("
					<a href= '../graficos/compraxcat.php?id=$_GET[id]'  class='btn btn-dark' name='grafico' type='submit'>Categoria</a>
					<a href='../graficos/compraxmarc.php?id=$_GET[id]'  class='btn btn-dark' name='grafico' type='submit'>Marca</a>
					<a href='../graficos/compraxmat.php?id=$_GET[id]'  class='btn btn-dark' name='grafico' type='submit'>Material</a>
					<a href='../graficos/compraxoc.php?id=$_GET[id]'  class='btn btn-dark' name='grafico' type='submit'>Ocasion</a>
					<a href='../graficos/compraxta.php?id=$_GET[id]'  class='btn btn-dark' name='grafico' type='submit'>Talla</a>
					"
					);
						?>
					</div>

			</form>
		</div>
	</div>
</div>