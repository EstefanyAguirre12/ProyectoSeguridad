<?php

//Este es nuestro primer grafico perros//

//Requiere la libreria generica
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph.php');
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Inicio");
//Requerimos el tipo de grafico que vamos a utilizar
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph_line.php');
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph_scatter.php');
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph_regstat.php');

//Conexion a la base de datos
require_once('../../app/models/database.class.php');

$idc = $_GET['id'];

//Buscamos si encontramos un registro con los datos del usuario
$sql="SELECT Material, sum(carrito.Cantidad)Cantidad from material INNER JOIN producto on producto.IdMaterial=Material.IdMaterial Inner Join carrito on carrito.IdProducto=producto.IdProducto where carrito.IdCliente=? and EstadoCompra=1 GROUP BY Material";
$params=array($idc);
$res=Database::getRows($sql,$params);
foreach($res as $row)
{
    //agregamos los datos al array
    $datos[] = $row['Cantidad'];
    $labels[] = $row['Material'];
}
// Some (random) data
 
if($res!=null){

// Create the graph and set a scale.
// These two calls are always required
$graph = new Graph(900,600);
$graph->SetScale("intlin");
$graph->img->SetMargin(60,60,60,60);        
$graph->title->Set("Productos comprados por material");
$graph->xaxis->title->Set("Material");
$graph->xaxis->SetTickLabels($labels);
$graph->yaxis->title->Set("Cantidad");

// Create the linear plot
$lineplot=new LinePlot($datos);

// Add the plot to the graph
$graph->Add($lineplot);
 
// Display the graph
$graph->Stroke();
}else{
    Page::showMessage(2, "Datos inexistente", "../cliente/index.php");
    Page::templateFooter();

}
//Salida archivo formato PNG
//$grafico->Stroke("IMG.PNG");
?>