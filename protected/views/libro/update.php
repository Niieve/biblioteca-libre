<?php
/* @var $this LibroController */
/* @var $model Libro */

$this->breadcrumbs=array(
	'Libros'=>array('libro/admin'),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Lista autores', 'url'=>array('autor/admin')),
);
?>

<h1>Modificar Libro</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>