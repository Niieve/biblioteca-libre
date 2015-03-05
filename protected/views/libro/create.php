<?php
/* @var $this LibroController */
/* @var $model Libro */

$this->breadcrumbs=array(
	'Libros'=>array('libro/admin'),
	'Autores'=>array('autor/admin'),
	'Agregar nuevo libro',
);
?>

<h1>Agregar nuevo libro</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>