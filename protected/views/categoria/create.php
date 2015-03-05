<?php
/* @var $this CategoriaController */
/* @var $model Categoria */

$this->breadcrumbs=array(
	'Libros'=>array('libro/admin'),
	'Agregar nueva categoría',
);

$this->menu=array(
	array('label'=>'Lista de Categorías', 'url'=>array('admin')),
);
?>

<h1>Agregar nueva categoría</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>