<?php

//Este es nuestro primer grafico perros//

//Requiere la libreria generica
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph.php');
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Inicio");
//Requerimos el tipo de grafico que vamos a utilizar
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph_scatter.php');

//Conexion a la base de datos
require_once('../../app/models/database.class.php');

$idc = $_GET['id'];

//Buscamos si encontramos un registro con los datos del usuario
$sql="SELECT Ocasion, sum(carrito.Cantidad)Cantidad from Ocasion INNER JOIN producto on producto.IdOcasion=Ocasion.IdOcasion Inner Join carrito on carrito.IdProducto=producto.IdProducto where carrito.IdCliente=? and EstadoCompra=1 GROUP BY Ocasion";
$params=array($idc);
$res=Database::getRows($sql,$params);
foreach($res as $row)
{
    //agregamos los datos al array
    $datos[] = $row['Cantidad'];
    $labels[] = $row['Ocasion'];
}
if($res!=null){

$graph = new Graph(900,600);
$graph->SetScale("intlin");
$graph->img->SetMargin(60,60,60,60);        
$graph->SetShadow();
$graph->title->Set("Productos comprados por ocasion");
$graph->xaxis->title->Set("Ocasion");
$graph->xaxis->SetTickLabels($labels);
$graph->yaxis->title->Set("Cantidad");
 
$sp1 = new ScatterPlot($datos);
$sp1->mark->SetType(MARK_FILLEDCIRCLE);
$sp1->mark->SetFillColor("red");
$sp1->mark->SetWidth(8);
 
$graph->Add($sp1);
$graph->Stroke();
//Salida archivo formato PNG
}else{
    Page::showMessage(2, "Datos inexistente", "../cliente/index.php");
    Page::templateFooter();

}
//Salida archivo formato PNG
//$grafico->Stroke("IMG.PNG");
?>