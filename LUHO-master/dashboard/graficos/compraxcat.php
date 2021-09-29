<?php

//Este es nuestro primer grafico perros//

//Requiere la libreria generica
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph.php');
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Inicio");
//Requerimos el tipo de grafico que vamos a utilizar
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph_bar.php');

//Conexion a la base de datos
require_once('../../app/models/database.class.php');
$idc = $_GET['id'];

//Buscamos si encontramos un registro con los datos del usuario
$sql="SELECT Categoria, sum(carrito.Cantidad)Cantidad from categoria INNER JOIN producto on producto.IdCategoria=categoria.IdCategoria Inner Join carrito on carrito.IdProducto=producto.IdProducto where carrito.IdCliente=? and EstadoCompra=1 GROUP BY Categoria";
$params=array($idc);
$res=Database::getRows($sql,$params);
foreach($res as $row)
{
    //agregamos los datos al array
    $datos[] = $row['Cantidad'];
    $labels[] = $row['Categoria'];
}
if($res!=null){

//definimos los formatos generales
$grafico = new Graph(900, 600);
$grafico->SetScale("intlin");
$grafico->img->SetMargin(60,60,60,60);        
$grafico->title->Set("Productos comprados en cada categoria");
$grafico->xaxis->title->Set("Categoria");
$grafico->xaxis->SetTickLabels($labels);
$grafico->yaxis->title->Set("Cantidad");

//Ingresamos los datos del array que van a ir en el grafico
$barplot1 = new BarPlot($datos);

//Definimos formatos especificos

//Un gradial horizontal morado
$barplot1->SetFillGradient("#BE81F7", "#E3CEF6", GRAD_HOR);
//30 PIXELES DE ANCHO PARA CADA BARRA
$barplot1->SetWidth(30);

//al grafico le agregamos los datos
$grafico->Add($barplot1);

//Salida por pantalla
$grafico->Stroke();
}else{
    Page::showMessage(2, "Datos inexistente", "../cliente/index.php");
    Page::templateFooter();

}
//Salida archivo formato PNG
//$grafico->Stroke("IMG.PNG");
?>