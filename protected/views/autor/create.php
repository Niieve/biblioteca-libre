<?php
/* @var $this AutorController */
/* @var $model Autor */

$this->breadcrumbs=array(
	'Libros'=>array('libro/admin'),
	'Autores'=>array('autor/admin'),
	'Agregar nuevo autor',
);

$this->menu=array(
	array('label'=>'Lista de autores', 'url'=>array('admin')),
);
?>

<h1>Agregar nuevo autor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>