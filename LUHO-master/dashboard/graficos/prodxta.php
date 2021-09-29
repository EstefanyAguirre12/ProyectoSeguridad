<?php

require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph.php');

//Requerimos el tipo de grafico que vamos a utilizar
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph_scatter.php');

//Conexion a la base de datos
require_once('../../app/models/database.class.php');


//Buscamos si encontramos un registro con los datos del usuario
$sql="SELECT Talla, COUNT(producto.IdTalla)Cantidad from Talla INNER JOIN producto on producto.IdTalla=Talla.IdTalla GROUP BY Talla";
$params=array(null);
$res=Database::getRows($sql,$params);
foreach($res as $row)
{
    //agregamos los datos al array
    $datos[] = $row['Cantidad'];
    $labels[] = $row['Talla'];
}

$graph = new Graph(900,600);
$graph->SetScale("intlin");
$graph->img->SetMargin(60,60,60,60);        
$graph->SetShadow();
$graph->title->Set("Cantidad de productos por talla");
$graph->xaxis->title->Set("Productos");
$graph->xaxis->SetTickLabels($labels);
$graph->yaxis->title->Set("Cantidad");
 
 
$sp1 = new ScatterPlot($datos);
$sp1->mark->SetType(MARK_SQUARE);
$sp1->SetImpuls();
 
$graph->Add($sp1);
$graph->Stroke();
?>