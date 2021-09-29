<?php

//Este es nuestro primer grafico perros//

//Requiere la libreria generica
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph.php');

//Requerimos el tipo de grafico que vamos a utilizar
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph_bar.php');

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

//definimos los formatos generales
$grafico = new Graph(900, 600, 'auto');
$grafico->SetScale("intlin");
$grafico->title->Set("Cantidad de productos en cada categoria");
$grafico->xaxis->title->Set("Categorias");
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

//Salida archivo formato PNG
//$grafico->Stroke("IMG.PNG");








?>