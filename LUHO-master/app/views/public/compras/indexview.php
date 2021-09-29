<div class="container margent"> 

<div class="row">	
    <div class="col-md-12">
        <form method='post'>
            <div class="row">	
                <div class="form-group col-md-4">
                    <input type="text" name ="Buscar" class="form-control validate" id="buscar" placeholder="Buscar" >
                    <label for="buscar" class="col-lg-2 control-label"></label>
                </div>
                <div class="text-right">
                    <button type='submit' name='buscar' class='btn btn-grey btn-rounded mr-md-3 z-depth-1a'><i class='material-icons'>Buscar</i></button>
                </div>
            </div>			
        </form>

    </div>
</div>
</div>


<div class="container text-center margenb" >
            <div class="px-4">
                <div class="table-wrapper">
                    <!--Table-->
                    <table class="table" ><!-- if using bootstrap this auto creates-->
                        <thead>
                            <tr>
                                <th>Material</th>
                                <th>Modificar</th>							
                                <th>Eliminar</th>														
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $total = null;
                                foreach($data as $row){
                                    $sub = $row['Cantidad']*$row['Costo'];
                                print("
                                <tr>
                                    <td>$row[Nombre]</td>
                                    <td>$$row[Costo]</td>
                                    <td>$row[Cantidad]</td>
                                    <td>$sub</td>
                                    <td></td>
                                    
                                <tr>
                                
                                "
                            );

                                }
                               
                            
                            ?>	
                      										
                        </tbody>
                    </table>

                    <!--Table-->
                </div>
            </div>	       
           

        </div>