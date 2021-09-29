<?php

require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph.php');

//Requerimos el tipo de grafico que vamos a utilizar
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph_scatter.php');

//Conexion a la base de datos
require_once('../../app/models/database.class.php');


//Buscamos si encontramos un registro con los datos del usuario
$sql="SELECT Categoria, COUNT(producto.IdCategoria)Cantidad from categoria INNER JOIN producto on producto.IdCategoria=categoria.IdCategoria GROUP BY Categoria";
$params=array(null);
$res=Database::getRows($sql,$params);
foreach($res as $row)
{
    //agregamos los datos al array
    $datos[] = $row['Cantidad'];
    $labels[] = $row['Categoria'];
}

$graph = new Graph(900,600);
$graph->SetScale("intlin");
$graph->img->SetMargin(60,60,60,60);        
$graph->SetShadow();
$graph->title->Set("A simple scatter plot");
$graph->xaxis->title->Set("Productos");
$graph->xaxis->SetTickLabels($labels);
$graph->yaxis->title->Set("Cantidad");
 
 
$sp1 = new ScatterPlot($datos);
$sp1->mark->SetType(MARK_SQUARE);
$sp1->SetImpuls();
 
$graph->Add($sp1);
$graph->Stroke();
?>