<?php

//Este es nuestro primer grafico perros//

//Requiere la libreria generica
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph.php');

//Requerimos el tipo de grafico que vamos a utilizar
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph_line.php');
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph_scatter.php');
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph_regstat.php');

//Conexion a la base de datos
require_once('../../app/models/database.class.php');

//Buscamos si encontramos un registro con los datos del usuario
$sql="SELECT Material, COUNT(producto.IdMaterial)Cantidad from Material INNER JOIN producto on producto.IdMaterial=Material.IdMaterial GROUP BY Material";
$params=array(null);
$res=Database::getRows($sql,$params);
foreach($res as $row)
{
    //agregamos los datos al array
    $datos[] = $row['Cantidad'];
    $labels[] = $row['Material'];
}
// Some (random) data
 
 
// Create the graph and set a scale.
// These two calls are always required
$graph = new Graph(900,600);
$graph->SetScale("intlin");
$graph->img->SetMargin(60,60,60,60);        
$graph->title->Set("Cantidad de productos por material");
$graph->xaxis->title->Set("Material");
$graph->xaxis->SetTickLabels($labels);
$graph->yaxis->title->Set("Cantidad");

// Create the linear plot
$lineplot=new LinePlot($datos);
 
// Add the plot to the graph
$graph->Add($lineplot);
 
// Display the graph
$graph->Stroke();
?>