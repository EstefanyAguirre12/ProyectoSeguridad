<?php

//Este es nuestro primer grafico perros//

//Requiere la libreria generica
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph.php');

//Requerimos el tipo de grafico que vamos a utilizar
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph_pie.php');

//Conexion a la base de datos
require_once('../../app/models/database.class.php');

//Buscamos si encontramos un registro con los datos del usuario
$sql="SELECT Marca, COUNT(producto.IdMarca)Cantidad from Marca INNER JOIN producto on producto.IdMarca=Marca.IdMarca GROUP BY Marca";
$params=array(null);
$res=Database::getRows($sql,$params);
foreach($res as $row)
{
    //agregamos los datos al array
    $datos[] = $row['Cantidad'];
    $labels[] = $row['Marca'];
}

$graph = new PieGraph(900,600);
$graph->img->SetMargin(60,60,60,60);        
$graph->SetShadow();
$graph->title->Set("Cantidad de productos por marca");
 
$p1 = new PiePlot($datos);
$p1->SetTheme("sand");
$p1->SetLegends($labels);
$p1->SetCenter(0.4);
 
$graph->Add($p1);
$graph->Stroke();

//Salida archivo formato PNG
