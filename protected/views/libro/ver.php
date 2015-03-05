<?php
/* @var $this LibroController */
/* @var $model Libro */

$this->breadcrumbs=array(
	'Libros'=>array('libro/admin'),
	'Libro',
);

$this->menu=array(
	array('label'=>'Agregar ejemplar', 'url'=>array('update', 'id'=>$model->li_Isbn)),
);
?>

<html>
<head>
<style>
 body {font-family: sans-serif;
 font-size: 10pt;
 }
 p { margin: 0pt;
 }
 td { vertical-align: top; }
 .items td {
 border-left: 0.1mm solid #000000;
 border-right: 0.1mm solid #000000;
 }
 table thead td { background-color: #EEEEEE;
 text-align: center;
 border: 0.1mm solid #000000;
 }
 table tbody td { background-color: #FFFFFF;
 text-align: center;
 border: 0.1mm solid #000000;
 }

</style>
</head>
<body>
 <table width="100%" style="font-size: 10pt; border-collapse: collapse;" cellpadding="5">
 <thead>
 <tr>
 <td><b>Categoría:</b></td><td> <?php echo $categoria;?><br></td>
 </tr>
 <tr>
 <td><b>Autor:</b></td><td><?php echo $autor;?><br></td>
 </tr>
  <tr>
 <td><b>Titulo:</b></td><td><?php echo $model->li_Titulo;?><br></td>
 </tr>
  <tr>
 <td><b>ISBN libro:</b></td><td><?php echo $model->li_Isbn;?><br></td>
 </tr>
 <tr>
 <td><b>Subtitulo:</b></td><td><?php echo $model->li_Subtitulo;?><br></td>
 </tr>
  <tr>
 <td><b>Editorial:</b></td><td><?php echo $model->li_Editorial;?><br></td>
 </tr>
 <tr>
 <td><b>Glosa:</b></td><td><?php echo $model->li_Glosa;?><br></td>
 </tr>
 <tr>
 <td><b>Cantidad de ejemplares:</b></td><td><?php echo $model->li_Ejemplares;?><br></td>
 </tr>
 </thead>
 </table>
 </body>
 </html>
