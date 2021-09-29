<?php

require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph.php');
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Inicio");
//Requerimos el tipo de grafico que vamos a utilizar
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph_scatter.php');

//Conexion a la base de datos
require_once('../../app/models/database.class.php');


$idc = $_GET['id'];

//Buscamos si encontramos un registro con los datos del usuario
$sql="SELECT Talla, sum(carrito.Cantidad)Cantidad from Talla INNER JOIN producto on producto.IdTalla=Talla.IdTalla Inner Join carrito on carrito.IdProducto=producto.IdProducto where carrito.IdCliente=? and EstadoCompra=1 GROUP BY Talla";
$params=array($idc);
$res=Database::getRows($sql,$params);
foreach($res as $row)
{
    //agregamos los datos al array
    $datos[] = $row['Cantidad'];
    $labels[] = $row['Talla'];
}
if($res!=null){

$graph = new Graph(900,600);
$graph->SetScale("intlin");
$graph->img->SetMargin(60,60,60,60);        
$graph->SetShadow();
$graph->title->Set("Productos comprados por talla");
$graph->xaxis->title->Set("Talla");
$graph->xaxis->SetTickLabels($labels);
$graph->yaxis->title->Set("Cantidad");
 
 
$sp1 = new ScatterPlot($datos);
$sp1->mark->SetType(MARK_SQUARE);
$sp1->SetImpuls();
 
$graph->Add($sp1);
$graph->Stroke();
}else{
    Page::showMessage(2, "Datos inexistente", "../cliente/index.php");
    Page::templateFooter();

}
//Salida archivo formato PNG
//$grafico->Stroke("IMG.PNG");
?>