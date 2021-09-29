<?php

//Este es nuestro primer grafico perros//

//Requiere la libreria generica
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph.php');
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Inicio");
//Requerimos el tipo de grafico que vamos a utilizar
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph_pie.php');

//Conexion a la base de datos
require_once('../../app/models/database.class.php');

$idc = $_GET['id'];

//Buscamos si encontramos un registro con los datos del usuario
$sql="SELECT Marca, sum(carrito.Cantidad)Cantidad from Marca INNER JOIN producto on producto.IdMarca=Marca.IdMarca Inner Join carrito on carrito.IdProducto=producto.IdProducto where carrito.IdCliente=? and EstadoCompra=1 GROUP BY Marca";
$params=array($idc);
$res=Database::getRows($sql,$params);
foreach($res as $row)
{
    //agregamos los datos al array
    $datos[] = $row['Cantidad'];
    $labels[] = $row['Marca'];
}
if($res!=null){

$graph = new PieGraph(900,600);
$graph->img->SetMargin(60,60,60,60);        
$graph->SetShadow();
$graph->title->Set("Productos comprados por Marca");
 
$p1 = new PiePlot($datos);
$p1->SetTheme("sand");
$p1->SetLegends($labels);
$p1->SetCenter(0.4);
 
$graph->Add($p1);
$graph->Stroke();

//Salida archivo formato PNG
//$grafico->Stroke("IMG.PNG");
}else{
    Page::showMessage(2, "Datos inexistente", "../cliente/index.php");
    Page::templateFooter();

}
//Salida archivo formato PNG
//$grafico->Stroke("IMG.PNG");
?>