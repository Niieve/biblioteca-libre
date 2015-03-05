<?php
/* @var $this AutorController */
/* @var $model Autor */

$this->breadcrumbs=array(
	'Libros'=>array('libro/admin'),
	'Autores'=>array('autor/admin'),
	'Agregar libro',
);

$this->menu=array(
	array('label'=>'Agregar libro', 'url'=>array('libro/create', 'id'=>$model->au_Id)),
);
?>

<h1>Autor</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'au_Id',
		'au_Nombre',
		'au_ApellidoP',
		'au_ApellidoM',
	),
)); ?>
